<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <span>\(\sum_{i=1}^n a_i\)</span>
    <div id="container" style="width:200px; height:200px;"></div>
    <script>
        window.MathJax = {
            tex: {
                // inlineMath: [['$', '$'], ['\\(', '\\)']]
                packages: {'[+]': ['mhchem']}
            },
            svg: {
                fontCache: 'global'
            },
            loader: {load: ['[tex]/mhchem']},
        };
    </script>
    {{-- <script src="mathjax-config.js" defer></script> --}}
    <script type="text/javascript" id="MathJax-script" defer
      src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js">
    </script>
    <script src="/js/three-playground.js"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" integrity="sha512-dLxUelApnYxpLt6K2iomGngnHO83iUvZytA3YjDUCjT0HDOHKXnVYdf3hU4JjM8uEhxf9nD1/ey98U3t2vZ0qQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/three-orbitcontrols@2.110.3/OrbitControls.min.js"></script> --}}
    <script type="module">
        // const scene = new THREE.Scene();
        // const camera = new THREE.PerspectiveCamera(50, 500 / 400, 0.1, 1000);

        // const renderer = new THREE.WebGLRenderer();
        // renderer.setSize(500, 400);
        // document.body.appendChild(renderer.domElement);

        // //sphere geometry
        // const geometry = new THREE.SphereGeometry(3, 50, 50, 0, Math.PI * 2, 0, Math.PI * 2);
        // const material = new THREE.MeshNormalMaterial();
        // const cube = new THREE.Mesh(geometry, material);
        // scene.add(cube);
        // camera.position.z = 10;

        // var render = function () {
        //     requestAnimationFrame(render);

        //     cube.rotation.y += 0.01;

        //     renderer.render(scene, camera);
        // };

        // render();

        // // renderer.render(scene, camera);

        
    </script>
</body>
</html>