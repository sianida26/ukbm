import * as THREE from 'three'

import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';


let xxxCamera, xxxControls, xxxScene, xxxRenderer, xxxClock;
let xxxElectrons = [];
let xxxNElectrons = 18;

initXXX();
// render(); // remove when using next line for animation loop (requestAnimationFrame)
animateXXX();
console.log(xxxElectrons);


function initXXX(){

    let container = document.getElementById('container');
    xxxScene = new THREE.Scene();
    xxxScene.background = new THREE.Color( 0xFFFFFF );

    xxxRenderer = new THREE.WebGLRenderer({antialias: true});
    xxxRenderer.setPixelRatio(window.devicePixelRatio);
    xxxRenderer.setSize(200, 200);
    container.appendChild(xxxRenderer.domElement);

    xxxCamera = new THREE.PerspectiveCamera(50, 200/200, 0.1, 1000);
    xxxCamera.position.set(0, 0, 75);

    xxxScene.add(xxxCamera);

    //controls
    xxxControls = new OrbitControls(xxxCamera, xxxRenderer.domElement);

    // xxxControls.enabled = false;
    xxxControls.enableDamping = true;
    xxxControls.dampingFactor = 0.05;

    xxxControls.screenSpacePanning = false;

    xxxControls.minDistance = 0;
    xxxControls.maxDistance = 100;

    //world
    const geometry = new THREE.SphereGeometry(30, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    const material = new THREE.MeshPhongMaterial({color: 0xffffff, transparent: true, opacity: 0.6});
    const cube = new THREE.Mesh(geometry, material);
    xxxScene.add(cube);

    //shell orbit
    for (let i = 1; i <= 2; i++) {
        const shellGeometry = new THREE.CircleGeometry(10*i, 60);
        const shellEdges = new THREE.EdgesGeometry(shellGeometry);
        const shell = new THREE.LineSegments(shellEdges, new THREE.LineBasicMaterial({color: 0x000000}));
        // shell.rotation.x = Math.PI / 2;
        xxxScene.add(shell);
    }

    //electron
    let electronGeometry = new THREE.SphereGeometry(2, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    let electronMaterial = new THREE.MeshStandardMaterial({color: 0xff0000});
    let electron = new THREE.Mesh(electronGeometry, electronMaterial);
    electron.position.set(10, 0, 0);
    xxxScene.add(electron)

    //lights
    const light = new THREE.PointLight(0xFFFFFF, 0.5);
    light.position.set( 0, 0, 50 );
    xxxScene.add( light );

    const ambientLight = new THREE.AmbientLight(0x808080 , 1);
    xxxScene.add(ambientLight);

    //Clock
    xxxClock = new THREE.Clock();
}

function onWindowResize() {

    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    xxxRenderer.setSize( window.innerWidth, window.innerHeight );

}

function animateXXX() {

    requestAnimationFrame( animateXXX );

    xxxControls.update(); // only required if xxxControls.enableDamping = true, or if xxxControls.autoRotate = true

    let t = xxxClock.getElapsedTime();
    console.log(t)

    render();

    // let electronSpeed = 5

    // xxxElectrons.forEach(electron => {
    //     electron.position.x = electron.userData.radius*Math.cos(electronSpeed/electron.userData.nShell*t + electron.userData.phase);
    //     electron.position.y = electron.userData.radius*Math.sin(electronSpeed/electron.userData.nShell*t + electron.userData.phase);
    // })

    // xxxElectron1.position.x = 10 * Math.cos(electronSpeed*t);
    // xxxElectron1.position.y = 15 * Math.cos(electronSpeed*t);
    // xxxElectron1.position.z = 10 * Math.sin(electronSpeed*t);

    // xxxElectron2.position.x = 10 * Math.sin(electronSpeed*(t + 1));
    // xxxElectron2.position.y = -10 * Math.cos(electronSpeed*(t+1.5));
    // xxxElectron2.position.z = -10 * Math.cos(electronSpeed*(t + 1));

    // xxxElectron3.position.x = -10 * Math.sin(electronSpeed*(t+1));
    // xxxElectron3.position.y = 0 * Math.sin(electronSpeed*(t+1));
    // xxxElectron3.position.z = 15 * Math.sin(electronSpeed*(t+1));

    // xxxElectron4.position.x = -15 * Math.sin(electronSpeed*(t+7));
    // xxxElectron4.position.y = 15 * Math.cos(electronSpeed*(t+7));
    // xxxElectron4.position.z = -15 * Math.sin(electronSpeed*(t+7));

    // xxxElectron5.position.x = -13 * Math.cos(electronSpeed*(t+3));
    // xxxElectron5.position.y = -13 * Math.cos(electronSpeed*(t+3));
    // xxxElectron5.position.z = -13 * Math.sin(electronSpeed*(t+3));

}

function render() {

    xxxRenderer.render( xxxScene, xxxCamera );

}