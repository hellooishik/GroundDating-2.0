/**
 * GroundedDating 3D Globe Implementation
 * Renders a slowly rotating Earth with glowing connection nodes using Three.js
 */

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('gd-globe-container');
    if (!container) return;

    // Check if Three.js is loaded
    if (typeof THREE === 'undefined') {
        console.error('Three.js is not loaded.');
        return;
    }

    // 1. Scene Setup
    const scene = new THREE.Scene();

    // 2. Camera Setup
    const camera = new THREE.PerspectiveCamera(
        45,
        container.clientWidth / container.clientHeight,
        0.1,
        1000
    );
    camera.position.z = 3.5; // Moved back to prevent clipping/octagon effect

    // 3. Renderer Setup
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    // Add Lighting so the sphere looks 3D instead of flat!
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
    scene.add(ambientLight);
    const directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
    directionalLight.position.set(5, 3, 5);
    scene.add(directionalLight);

    // 4. Globe Geometry and Material Setup
    const radius = 1;
    const segments = 64; // High res for smooth sphere
    const geometry = new THREE.SphereGeometry(radius, segments, segments);

    // Using a basic wireframe + particle approach to look minimal, modern, slightly futuristic
    const group = new THREE.Group();
    scene.add(group);

    // Creates the underlying dark sphere with 3D shading
    const sphereMat = new THREE.MeshPhongMaterial({
        color: 0x0A192F, // Navy core
        emissive: 0x071120, // Slight glow
        transparent: true,
        opacity: 0.9,
        shininess: 15
    });
    const sphereMesh = new THREE.Mesh(geometry, sphereMat);
    group.add(sphereMesh);

    // Create a dot-based surface to represent continents abstractly
    // For a lightweight implementation without loading external maps, we generate controlled noise/distributions
    const dotGeometry = new THREE.BufferGeometry();
    const dotCount = 1500;
    const dotPositions = new Float32Array(dotCount * 3);

    // Helper to get random point on sphere
    for (let i = 0; i < dotCount; i++) {
        // Random spherical coordinates
        const phi = Math.acos(-1 + (2 * i) / dotCount);
        const theta = Math.sqrt(dotCount * Math.PI) * phi;

        // Convert to Cartesian
        const x = radius * 1.01 * Math.cos(theta) * Math.sin(phi);
        const y = radius * 1.01 * Math.sin(theta) * Math.sin(phi);
        const z = radius * 1.01 * Math.cos(phi);

        dotPositions[i * 3] = x;
        dotPositions[i * 3 + 1] = y;
        dotPositions[i * 3 + 2] = z;
    }

    dotGeometry.setAttribute('position', new THREE.BufferAttribute(dotPositions, 3));

    const dotMaterial = new THREE.PointsMaterial({
        color: 0x4A5568, // Muted tone for base map
        size: 0.015,
        transparent: true,
        opacity: 0.6
    });

    const dotCloud = new THREE.Points(dotGeometry, dotMaterial);
    group.add(dotCloud);

    // 5. Glowing Connection Nodes
    // Representing global connections
    const nodeGeometry = new THREE.BufferGeometry();
    const nodeCount = 20; // Number of major connections
    const nodePositions = new Float32Array(nodeCount * 3);

    for (let i = 0; i < nodeCount; i++) {
        const phi = Math.random() * Math.PI;
        const theta = Math.random() * 2 * Math.PI;

        nodePositions[i * 3] = radius * 1.02 * Math.sin(phi) * Math.cos(theta);
        nodePositions[i * 3 + 1] = radius * 1.02 * Math.cos(phi);
        nodePositions[i * 3 + 2] = radius * 1.02 * Math.sin(phi) * Math.sin(theta);
    }

    nodeGeometry.setAttribute('position', new THREE.BufferAttribute(nodePositions, 3));

    const nodeMaterial = new THREE.PointsMaterial({
        color: 0xFF4D6D, // Primary deep coral
        size: 0.05,
        transparent: true,
        opacity: 1,
        blending: THREE.AdditiveBlending // Glow effect
    });

    const nodes = new THREE.Points(nodeGeometry, nodeMaterial);
    group.add(nodes);

    // 6. Connecting Lines (Subtle curves between nodes)
    const lineMaterial = new THREE.LineBasicMaterial({
        color: 0xFF4D6D,
        transparent: true,
        opacity: 0.2,
        blending: THREE.AdditiveBlending
    });

    // Connect some random nodes
    for (let i = 0; i < nodeCount - 1; i += 2) {
        const p1 = new THREE.Vector3(nodePositions[i * 3], nodePositions[i * 3 + 1], nodePositions[i * 3 + 2]);
        const p2 = new THREE.Vector3(nodePositions[(i + 1) * 3], nodePositions[(i + 1) * 3 + 1], nodePositions[(i + 1) * 3 + 2]);

        // Draw a straight line for simplicity, a curve would involve more math
        const lGeo = new THREE.BufferGeometry().setFromPoints([p1, p2]);
        const line = new THREE.Line(lGeo, lineMaterial);
        group.add(line);
    }


    // 7. Animation Loop
    // Subtle rotation and bobbing
    let animationId;

    function animate() {
        animationId = requestAnimationFrame(animate);

        // Rotate the entire group (Earth + nodes + lines)
        group.rotation.y += 0.002;
        group.rotation.x = 0.15; // Set a fixed tilt instead of wobble

        // Pulse the connection nodes
        const time = Date.now() * 0.003;
        nodeMaterial.size = 0.04 + Math.sin(time) * 0.015;

        renderer.render(scene, camera);
    }

    animate();

    // 8. Handle Window Resize
    window.addEventListener('resize', () => {
        const width = container.clientWidth;
        const height = container.clientHeight;

        renderer.setSize(width, height);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    });

    // Handle Dark Mode toggle effect on globe
    const htmlEl = document.documentElement;
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.attributeName === 'data-theme') {
                const theme = htmlEl.getAttribute('data-theme');
                if (theme === 'dark') {
                    sphereMat.color.setHex(0x151A23);
                    sphereMat.emissive.setHex(0x0C0F14);
                    dotMaterial.color.setHex(0x2D3748);
                } else {
                    sphereMat.color.setHex(0x0A192F);
                    sphereMat.emissive.setHex(0x071120);
                    dotMaterial.color.setHex(0x4A5568);
                }
            }
        });
    });
    observer.observe(htmlEl, { attributes: true });

});
