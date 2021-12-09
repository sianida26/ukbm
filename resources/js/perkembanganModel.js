import * as THREE from 'three'

import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';


// let camera, controls, scene, renderer;

let daltonCamera, daltonControls, daltonScene, daltonRenderer;
let thomsonCamera, thomsonControls, thomsonScene, thomsonRenderer;
let rutherfordCamera, rutherfordControls, rutherfordScene, rutherfordRenderer, rutherfordClock, rutherfordElectron1, rutherfordElectron2, rutherfordElectron3, rutherfordElectron4, rutherfordElectron5;
let bohrCamera, bohrControls, bohrScene, bohrRenderer, bohrClock;
let bohrElectrons = [];
let bohrNElectrons = 18;

init();


function init(){
    initDalton();
    animateDalton();

    initThomson();
    animateThomson();

    initRutherford();
    animateRutherford();

    initBohr();
    animateBohr();
}


function initDalton(){

    let container = document.getElementById('dalton-model');
    daltonScene = new THREE.Scene();
    //background scene is rgb(243, 244, 246)
    daltonScene.background = new THREE.Color( 0xf3f4f6 );

    daltonRenderer = new THREE.WebGLRenderer({antialias: true});
    daltonRenderer.setPixelRatio(window.devicePixelRatio);
    daltonRenderer.setSize(400, 300);
    container.appendChild(daltonRenderer.domElement);

    daltonCamera = new THREE.PerspectiveCamera(50, 400/300, 0.1, 1000);
    daltonCamera.position.set(100, 200, 0);

    //controls
    daltonControls = new OrbitControls(daltonCamera, daltonRenderer.domElement);

    daltonControls.enableDamping = true;
    daltonControls.dampingFactor = 0.05;

    daltonControls.screenSpacePanning = false;

    daltonControls.minDistance = 30;
    daltonControls.maxDistance = 100;

    //world
    const geometry = new THREE.SphereGeometry(25, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    // const material = new THREE.MeshBasicMaterial( { color: 0xffff00 } );
    let material = new THREE.MeshStandardMaterial({color: 0xFF6347})
    const cube = new THREE.Mesh(geometry, material);
    daltonScene.add(cube);

    // lights

    const light = new THREE.PointLight(0xFFFFFF, 0.5);
    light.position.set( 50, 50, 50 );
    daltonScene.add( light );

    const ambientLight = new THREE.AmbientLight(0x404040 , 1);
    daltonScene.add(ambientLight);

}

function animateDalton() {

    requestAnimationFrame( animateDalton );

    daltonControls.update(); // only required if daltonControls.enableDamping = true, or if daltonControls.autoRotate = true

    renderDalton();

}

function initThomson(){
    let electrons = [
        [-7.991316051669517, -9.452384108433272, 9.113091001173078],
        [-10.043977282139682, 1.342213558150835, 9.471510215572497],
        [8.398430116011262, -11.742909278441038, -10.498908834300845],
        [-4.535248271355457, 6.256481716207134, 3.032300045894459],
        [8.705567377720342, -6.213738723094969, 8.2273820097633],
        [8.914401065741757, 4.749653717878704, 1.7055928080171423],
        [3.1162302959552584, -10.930133376298812, -8.009795448707314]
    ]

    let container = document.getElementById('thomson-model');
    thomsonScene = new THREE.Scene();
    thomsonScene.background = new THREE.Color( 0xf3f4f6 );

    thomsonRenderer = new THREE.WebGLRenderer({antialias: true});
    thomsonRenderer.setPixelRatio(window.devicePixelRatio);
    thomsonRenderer.setSize(200, 200);
    container.appendChild(thomsonRenderer.domElement);

    thomsonCamera = new THREE.PerspectiveCamera(50, 200/200, 0.1, 1000);
    thomsonCamera.position.set(100, 200, 0);

    //controls
    thomsonControls = new OrbitControls(thomsonCamera, thomsonRenderer.domElement);

    thomsonControls.enableDamping = true;
    thomsonControls.dampingFactor = 0.05;

    thomsonControls.screenSpacePanning = false;

    thomsonControls.minDistance = 0;
    thomsonControls.maxDistance = 100;

    //world
    const geometry = new THREE.SphereGeometry(25, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    const material = new THREE.MeshStandardMaterial({color: 0xFF6347, transparent: true, opacity: 0.8});
    const cube = new THREE.Mesh(geometry, material);
    thomsonScene.add(cube);

    const electronGeometry = new THREE.SphereGeometry(3, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    let electronMaterial = new THREE.MeshStandardMaterial({color: 0xFF0000});

    for(let i = 0; i < electrons.length; i++){
        let electron = new THREE.Mesh(electronGeometry, electronMaterial);
        electron.position.set(electrons[i][0], electrons[i][1], electrons[i][2]);
        electron.updateMatrix();
        electron.matrixAutoUpdate = false;
        thomsonScene.add(electron);
    }

    // // lights

    const light = new THREE.PointLight(0xFFFFFF, 0.5);
    light.position.set( 50, 50, 50 );
    thomsonScene.add( light );

    const ambientLight = new THREE.AmbientLight(0x808080 , 1);
    thomsonScene.add(ambientLight);
}

function initRutherford(){
    let container = document.getElementById('rutherford-model');
    rutherfordScene = new THREE.Scene();
    rutherfordScene.background = new THREE.Color( 0xf3f4f6 );

    rutherfordRenderer = new THREE.WebGLRenderer({antialias: true});
    rutherfordRenderer.setPixelRatio(window.devicePixelRatio);
    rutherfordRenderer.setSize(200, 200);
    container.appendChild(rutherfordRenderer.domElement);

    rutherfordCamera = new THREE.PerspectiveCamera(50, 200/200, 0.1, 1000);
    rutherfordCamera.position.set(100, 200, 0);

    //controls
    rutherfordControls = new OrbitControls(rutherfordCamera, rutherfordRenderer.domElement);

    rutherfordControls.enableDamping = true;
    rutherfordControls.dampingFactor = 0.05;

    rutherfordControls.screenSpacePanning = false;

    rutherfordControls.minDistance = 0;
    rutherfordControls.maxDistance = 100;

    //world
    const geometry = new THREE.SphereGeometry(25, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    const material = new THREE.MeshPhongMaterial({color: 0x426bff, transparent: true, opacity: 0.6});
    const cube = new THREE.Mesh(geometry, material);
    rutherfordScene.add(cube);

    let nucleusGeometry = new THREE.SphereGeometry(5, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    let nucleusMaterial = new THREE.MeshStandardMaterial({color: 0x000000});

    let nucleus = new THREE.Mesh(nucleusGeometry, nucleusMaterial);
    nucleus.position.set(0, 0, 0);
    rutherfordScene.add(nucleus);

    let electronGeometry = new THREE.SphereGeometry(1, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    let electronMaterial = new THREE.MeshStandardMaterial({color: 0xff0000});

    //3 electrons
    rutherfordElectron1 = new THREE.Mesh(electronGeometry, electronMaterial);
    rutherfordElectron2 = new THREE.Mesh(electronGeometry, electronMaterial);
    rutherfordElectron3 = new THREE.Mesh(electronGeometry, electronMaterial);
    rutherfordElectron4 = new THREE.Mesh(electronGeometry, electronMaterial);
    rutherfordElectron5 = new THREE.Mesh(electronGeometry, electronMaterial);

    //electron1
    rutherfordElectron1.position.set(15, 15, 0);
    rutherfordElectron2.position.set(15, -10, 15);
    rutherfordElectron3.position.set(-10, 0, 15);
    rutherfordElectron4.position.set(-15, 0, -15);
    rutherfordElectron5.position.set(-13, -13, -13);
    nucleus.add(rutherfordElectron1);
    nucleus.add(rutherfordElectron2);
    nucleus.add(rutherfordElectron3);
    nucleus.add(rutherfordElectron4);
    nucleus.add(rutherfordElectron5);

    // // lights

    const light = new THREE.PointLight(0xFFFFFF, 0.5);
    light.position.set( 50, 50, 50 );
    rutherfordScene.add( light );

    const ambientLight = new THREE.AmbientLight(0x808080 , 1);
    rutherfordScene.add(ambientLight);

    //Clock
    rutherfordClock = new THREE.Clock();
}

function animateRutherford(){
    requestAnimationFrame( animateRutherford );

    rutherfordControls.update(); // only required if rutherfordControls.enableDamping = true, or if rutherfordControls.autoRotate = true

    let t = rutherfordClock.getElapsedTime();

    rutherfordRenderer.render( rutherfordScene, rutherfordCamera );

    let electronSpeed = 5

    rutherfordElectron1.position.x = 15 * Math.sin(electronSpeed*t);
    rutherfordElectron1.position.y = 15 * Math.cos(electronSpeed*t);
    rutherfordElectron1.position.z = 15 * Math.sin(electronSpeed*t);

    rutherfordElectron2.position.x = 15 * Math.cos(electronSpeed*(t+1.5));
    rutherfordElectron2.position.y = -10 * Math.cos(electronSpeed*(t+1.5));
    rutherfordElectron2.position.z = 15 * Math.cos(electronSpeed*(t+1.5));

    rutherfordElectron3.position.x = -10 * Math.sin(electronSpeed*(t+1));
    rutherfordElectron3.position.y = 0 * Math.sin(electronSpeed*(t+1));
    rutherfordElectron3.position.z = 15 * Math.sin(electronSpeed*(t+1));

    rutherfordElectron4.position.x = -15 * Math.sin(electronSpeed*(t+7));
    rutherfordElectron4.position.y = 15 * Math.cos(electronSpeed*(t+7));
    rutherfordElectron4.position.z = -15 * Math.sin(electronSpeed*(t+7));

    rutherfordElectron5.position.x = -13 * Math.cos(electronSpeed*(t+3));
    rutherfordElectron5.position.y = -13 * Math.cos(electronSpeed*(t+3));
    rutherfordElectron5.position.z = -13 * Math.sin(electronSpeed*(t+3));
}

function animateThomson() {

    requestAnimationFrame( animateThomson );

    thomsonControls.update(); // only required if xControls.enableDamping = true, or if Controls.autoRotate = true

    renderThomson();

}

function renderDalton() {

    daltonRenderer.render( daltonScene, daltonCamera );

}

function renderThomson() {

    thomsonRenderer.render( thomsonScene, thomsonCamera );

}

function initBohr(){
    let container = document.getElementById('bohr-model');
    bohrScene = new THREE.Scene();
    bohrScene.background = new THREE.Color( 0xFFFFFF );

    bohrRenderer = new THREE.WebGLRenderer({antialias: true});
    bohrRenderer.setPixelRatio(window.devicePixelRatio);
    bohrRenderer.setSize(200, 200);
    container.appendChild(bohrRenderer.domElement);

    bohrCamera = new THREE.PerspectiveCamera(50, 200/200, 0.1, 1000);
    bohrCamera.position.set(0, 0, 75);

    bohrScene.add(bohrCamera);

    //controls
    bohrControls = new OrbitControls(bohrCamera, bohrRenderer.domElement);

    bohrControls.enabled = false;
    // bohrControls.enableDamping = true;
    // bohrControls.dampingFactor = 0.05;

    // bohrControls.screenSpacePanning = false;

    // bohrControls.minDistance = 0;
    // bohrControls.maxDistance = 100;

    //world
    const geometry = new THREE.SphereGeometry(30, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    const material = new THREE.MeshPhongMaterial({color: 0x426bff, transparent: true, opacity: 0.6});
    const cube = new THREE.Mesh(geometry, material);
    bohrScene.add(cube);

    let nucleusGeometry = new THREE.SphereGeometry(5, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    let nucleusMaterial = new THREE.MeshStandardMaterial({color: 0x000000});

    let nucleus = new THREE.Mesh(nucleusGeometry, nucleusMaterial);
    nucleus.position.set(0, 0, 0);
    bohrScene.add(nucleus);

    let electronGeometry = new THREE.SphereGeometry(1, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
    let electronMaterial = new THREE.MeshStandardMaterial({color: 0xff0000});

    let nShell = 0;

    for(let i = 1; i <= bohrNElectrons; i++){
        
        //draw orbit if i equals 1, 3, 10
        if(i === 1 || i === 3 || i === 11){

            nShell++
            const shellGeometry = new THREE.CircleGeometry(10*nShell, 60);
            const shellEdges = new THREE.EdgesGeometry(shellGeometry);
            const shell = new THREE.LineSegments(shellEdges, new THREE.LineBasicMaterial({color: 0x000000}));
            // shell.rotation.x = Math.PI / 2;
            bohrScene.add(shell);
        }

        //electron
        let electron = new THREE.Mesh(electronGeometry, electronMaterial);
        electron.userData.nShell = nShell;

        //1st shell
        if (nShell === 1){
        }
        switch(nShell){
            case 1 : {
                let radius = 10;
                let nElectronsInThisShell = bohrNElectrons > 2 ? 2 : bohrNElectrons;
                let phase = 2*Math.PI*(i)/nElectronsInThisShell
                let x = Math.cos(phase) * radius;
                let y = Math.sin(phase) * radius;
                electron.position.x = x
                electron.position.y = y
                electron.userData.phase = phase
                electron.userData.radius = radius;
                break;
            }
            case 2 : {
                let radius = 20;
                let nElectronsInThisShell = bohrNElectrons > 10 ? 8 : bohrNElectrons - 2;
                let phase = 2*Math.PI*(i)/nElectronsInThisShell
                let x = Math.cos(phase) * radius;
                let y = Math.sin(phase) * radius;
                electron.position.x = x
                electron.position.y = y
                electron.userData.phase = phase
                electron.userData.radius = radius;
                break;
            } case 3 : {
                let radius = 30;
                let nElectronsInThisShell = bohrNElectrons > 28 ? 18 : bohrNElectrons - 10;
                let phase = 2*Math.PI*(i)/nElectronsInThisShell
                let x = Math.cos(phase) * radius;
                let y = Math.sin(phase) * radius;
                electron.position.x = x
                electron.position.y = y
                electron.userData.phase = phase
                electron.userData.radius = radius;
                break;
            }
        }
        bohrElectrons.push(electron);
        bohrScene.add(electron);
    }
    


    // // lights

    const light = new THREE.PointLight(0xFFFFFF, 0.5);
    light.position.set( 0, 0, 50 );
    bohrScene.add( light );

    const ambientLight = new THREE.AmbientLight(0x808080 , 1);
    bohrScene.add(ambientLight);

    //Clock
    bohrClock = new THREE.Clock();
}

function animateBohr(){
    requestAnimationFrame( animateBohr );

    bohrControls.update(); // only required if bohrControls.enableDamping = true, or if bohrControls.autoRotate = true

    let t = bohrClock.getElapsedTime();

    bohrRenderer.render( bohrScene, bohrCamera )

    let electronSpeed = 5

    bohrElectrons.forEach(electron => {
        electron.position.x = electron.userData.radius*Math.cos(electronSpeed/electron.userData.nShell*t + electron.userData.phase);
        electron.position.y = electron.userData.radius*Math.sin(electronSpeed/electron.userData.nShell*t + electron.userData.phase);
    })
}