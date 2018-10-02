var game, scene, camera, fieldOfView, aspectRatio, nearPlane, farPlane, renderer, container, controls, Colors = {
        red: 15881030,
        white: 14209233,
        brown: 5845806,
        brownDark: 2300175,
        pink: 16095342,
        yellow: 16043667,
        blue: 6865856
    },
    deltaTime = 0,
    newTime = (new Date).getTime(),
    oldTime = (new Date).getTime(),
    ennemiesPool = [],
    particlesPool = [],
    particlesInUse = [];

function resetGame() {
    game = {
        speed: 0,
        initSpeed: 35e-5,
        baseSpeed: 35e-5,
        targetBaseSpeed: 35e-5,
        incrementSpeedByTime: 25e-7,
        incrementSpeedByLevel: 5e-6,
        distanceForSpeedUpdate: 100,
        speedLastUpdate: 0,
        distance: 0,
        ratioSpeedDistance: 50,
        energy: 100,
        ratioSpeedEnergy: 3,
        level: 1,
        levelLastUpdate: 0,
        distanceForLevelUpdate: 1e3,
        planeDefaultHeight: 100,
        planeAmpHeight: 80,
        planeAmpWidth: 75,
        planeMoveSensivity: .005,
        planeRotXSensivity: 8e-4,
        planeRotZSensivity: 4e-4,
        planeFallSpeed: .001,
        planeMinSpeed: 1.2,
        planeMaxSpeed: 1.6,
        planeSpeed: 0,
        planeCollisionDisplacementX: 0,
        planeCollisionSpeedX: 0,
        planeCollisionDisplacementY: 0,
        planeCollisionSpeedY: 0,
        seaRadius: 600,
        seaLength: 800,
        wavesMinAmp: 5,
        wavesMaxAmp: 20,
        wavesMinSpeed: .001,
        wavesMaxSpeed: .003,
        cameraFarPos: 500,
        cameraNearPos: 150,
        cameraSensivity: .002,
        coinDistanceTolerance: 15,
        coinValue: 3,
        coinsSpeed: .5,
        coinLastSpawn: 0,
        distanceForCoinsSpawn: 100,
        ennemyDistanceTolerance: 10,
        ennemyValue: 10,
        ennemiesSpeed: .6,
        ennemyLastSpawn: 0,
        distanceForEnnemiesSpawn: 50,
        status: "playing"
    }, fieldLevel.innerHTML = Math.floor(game.level)
}
var HEIGHT, WIDTH, ambientLight, hemisphereLight, shadowLight, mousePos = {
    x: 0,
    y: 0
};

function createScene() {
    HEIGHT = window.innerHeight, WIDTH = window.innerWidth, scene = new THREE.Scene, aspectRatio = WIDTH / HEIGHT, fieldOfView = 50, nearPlane = .1, farPlane = 1e4, camera = new THREE.PerspectiveCamera(fieldOfView, aspectRatio, nearPlane, farPlane), scene.fog = new THREE.Fog(16243114, 100, 950), camera.position.x = 0, camera.position.z = 200, camera.position.y = game.planeDefaultHeight, (renderer = new THREE.WebGLRenderer({
        alpha: !0,
        antialias: !0
    })).setSize(WIDTH, HEIGHT), renderer.shadowMap.enabled = !0, (container = document.getElementById("world")).appendChild(renderer.domElement), window.addEventListener("resize", handleWindowResize, !1)
}

function handleWindowResize() {
    HEIGHT = window.innerHeight, WIDTH = window.innerWidth, renderer.setSize(WIDTH, HEIGHT), camera.aspect = WIDTH / HEIGHT, camera.updateProjectionMatrix()
}

function handleMouseMove(e) {
    var a = e.clientX / WIDTH * 2 - 1,
        n = 1 - e.clientY / HEIGHT * 2;
    mousePos = {
        x: a,
        y: n
    }
}

function handleTouchMove(e) {
    e.preventDefault();
    var a = e.touches[0].pageX / WIDTH * 2 - 1,
        n = 1 - e.touches[0].pageY / HEIGHT * 2;
    mousePos = {
        x: a,
        y: n
    }
}

function handleMouseUp(e) {
    "waitingReplay" == game.status && (resetGame(), hideReplay())
}

function handleTouchEnd(e) {
    "waitingReplay" == game.status && (resetGame(), hideReplay())
}

function createLights() {
    hemisphereLight = new THREE.HemisphereLight(11184810, 0, .9), ambientLight = new THREE.AmbientLight(14452852, .5), (shadowLight = new THREE.DirectionalLight(16777215, .9)).position.set(150, 350, 350), shadowLight.castShadow = !0, shadowLight.shadow.camera.left = -400, shadowLight.shadow.camera.right = 400, shadowLight.shadow.camera.top = 400, shadowLight.shadow.camera.bottom = -400, shadowLight.shadow.camera.near = 1, shadowLight.shadow.camera.far = 1e3, shadowLight.shadow.mapSize.width = 4096, shadowLight.shadow.mapSize.height = 4096;
    new THREE.CameraHelper(shadowLight.shadow.camera);
    scene.add(hemisphereLight), scene.add(shadowLight), scene.add(ambientLight)
}
var Pilot = function() {
    this.mesh = new THREE.Object3D, this.mesh.name = "pilot", this.angleHairs = 0;
    var e = new THREE.BoxGeometry(15, 15, 15),
        a = new THREE.MeshPhongMaterial({
            color: Colors.brown,
            shading: THREE.FlatShading
        }),
        n = new THREE.Mesh(e, a);
    n.position.set(2, -12, 0), this.mesh.add(n);
    var t = new THREE.BoxGeometry(10, 10, 10),
        i = new THREE.MeshLambertMaterial({
            color: Colors.pink
        }),
        s = new THREE.Mesh(t, i);
    this.mesh.add(s);
    var o = new THREE.BoxGeometry(4, 4, 4),
        r = new THREE.MeshLambertMaterial({
            color: Colors.brown
        }),
        l = new THREE.Mesh(o, r);
    l.geometry.applyMatrix((new THREE.Matrix4).makeTranslation(0, 2, 0));
    var h = new THREE.Object3D;
    this.hairsTop = new THREE.Object3D;
    for (var m = 0; m < 12; m++) {
        var d = l.clone(),
            p = m % 3,
            c = Math.floor(m / 3);
        d.position.set(4 * c - 4, 0, 4 * p - 4), d.geometry.applyMatrix((new THREE.Matrix4).makeScale(1, 1, 1)), this.hairsTop.add(d)
    }
    h.add(this.hairsTop);
    var g = new THREE.BoxGeometry(12, 4, 2);
    g.applyMatrix((new THREE.Matrix4).makeTranslation(-6, 0, 0));
    var E = new THREE.Mesh(g, r),
        w = E.clone();
    E.position.set(8, -2, 6), w.position.set(8, -2, -6), h.add(E), h.add(w);
    var M = new THREE.BoxGeometry(2, 8, 10),
        v = new THREE.Mesh(M, r);
    v.position.set(-1, -4, 0), h.add(v), h.position.set(-5, 5, 0), this.mesh.add(h);
    var y = new THREE.BoxGeometry(5, 5, 5),
        T = new THREE.MeshLambertMaterial({
            color: Colors.brown
        }),
        H = new THREE.Mesh(y, T);
    H.position.set(6, 0, 3);
    var u = H.clone();
    u.position.z = -H.position.z;
    var R = new THREE.BoxGeometry(11, 1, 11),
        S = new THREE.Mesh(R, T);
    this.mesh.add(H), this.mesh.add(u), this.mesh.add(S);
    var f = new THREE.BoxGeometry(2, 3, 2),
        P = new THREE.Mesh(f, i);
    P.position.set(0, 0, -6);
    var x = P.clone();
    x.position.set(0, 0, 6), this.mesh.add(P), this.mesh.add(x)
};
Pilot.prototype.updateHairs = function() {
    for (var e = this.hairsTop.children, a = e.length, n = 0; n < a; n++) {
        e[n].scale.y = .75 + .25 * Math.cos(this.angleHairs + n / 3)
    }
    this.angleHairs += game.speed * deltaTime * 40
};
var sea, airplane, AirPlane = function() {
    this.mesh = new THREE.Object3D, this.mesh.name = "airPlane";
    var e = new THREE.BoxGeometry(80, 50, 50, 1, 1, 1),
        a = new THREE.MeshPhongMaterial({
            color: Colors.red,
            shading: THREE.FlatShading
        });
    e.vertices[4].y -= 10, e.vertices[4].z += 20, e.vertices[5].y -= 10, e.vertices[5].z -= 20, e.vertices[6].y += 30, e.vertices[6].z += 20, e.vertices[7].y += 30, e.vertices[7].z -= 20;
    var n = new THREE.Mesh(e, a);
    n.castShadow = !0, n.receiveShadow = !0, this.mesh.add(n);
    var t = new THREE.BoxGeometry(20, 50, 50, 1, 1, 1),
        i = new THREE.MeshPhongMaterial({
            color: Colors.white,
            shading: THREE.FlatShading
        }),
        s = new THREE.Mesh(t, i);
    s.position.x = 50, s.castShadow = !0, s.receiveShadow = !0, this.mesh.add(s);
    var o = new THREE.BoxGeometry(15, 20, 5, 1, 1, 1),
        r = new THREE.MeshPhongMaterial({
            color: Colors.red,
            shading: THREE.FlatShading
        }),
        l = new THREE.Mesh(o, r);
    l.position.set(-40, 20, 0), l.castShadow = !0, l.receiveShadow = !0, this.mesh.add(l);
    var h = new THREE.BoxGeometry(30, 5, 120, 1, 1, 1),
        m = new THREE.MeshPhongMaterial({
            color: Colors.red,
            shading: THREE.FlatShading
        }),
        d = new THREE.Mesh(h, m);
    d.position.set(0, 15, 0), d.castShadow = !0, d.receiveShadow = !0, this.mesh.add(d);
    var p = new THREE.BoxGeometry(3, 15, 20, 1, 1, 1),
        c = new THREE.MeshPhongMaterial({
            color: Colors.white,
            transparent: !0,
            opacity: .3,
            shading: THREE.FlatShading
        }),
        g = new THREE.Mesh(p, c);
    g.position.set(5, 27, 0), g.castShadow = !0, g.receiveShadow = !0, this.mesh.add(g);
    var E = new THREE.BoxGeometry(20, 10, 10, 1, 1, 1);
    E.vertices[4].y -= 5, E.vertices[4].z += 5, E.vertices[5].y -= 5, E.vertices[5].z -= 5, E.vertices[6].y += 5, E.vertices[6].z += 5, E.vertices[7].y += 5, E.vertices[7].z -= 5;
    var w = new THREE.MeshPhongMaterial({
        color: Colors.brown,
        shading: THREE.FlatShading
    });
    this.propeller = new THREE.Mesh(E, w), this.propeller.castShadow = !0, this.propeller.receiveShadow = !0;
    var M = new THREE.BoxGeometry(1, 80, 10, 1, 1, 1),
        v = new THREE.MeshPhongMaterial({
            color: Colors.brownDark,
            shading: THREE.FlatShading
        }),
        y = new THREE.Mesh(M, v);
    y.position.set(8, 0, 0), y.castShadow = !0, y.receiveShadow = !0;
    var T = y.clone();
    T.rotation.x = Math.PI / 2, T.castShadow = !0, T.receiveShadow = !0, this.propeller.add(y), this.propeller.add(T), this.propeller.position.set(60, 0, 0), this.mesh.add(this.propeller);
    var H = new THREE.BoxGeometry(30, 15, 10, 1, 1, 1),
        u = new THREE.MeshPhongMaterial({
            color: Colors.red,
            shading: THREE.FlatShading
        }),
        R = new THREE.Mesh(H, u);
    R.position.set(25, -20, 25), this.mesh.add(R);
    var S = new THREE.BoxGeometry(24, 24, 4),
        f = new THREE.MeshPhongMaterial({
            color: Colors.brownDark,
            shading: THREE.FlatShading
        }),
        P = new THREE.Mesh(S, f);
    P.position.set(25, -28, 25);
    var x = new THREE.BoxGeometry(10, 10, 6),
        C = new THREE.MeshPhongMaterial({
            color: Colors.brown,
            shading: THREE.FlatShading
        }),
        L = new THREE.Mesh(x, C);
    P.add(L), this.mesh.add(P);
    var D = R.clone();
    D.position.z = -R.position.z, this.mesh.add(D);
    var I = P.clone();
    I.position.z = -P.position.z, this.mesh.add(I);
    var b = P.clone();
    b.scale.set(.5, .5, .5), b.position.set(-35, -5, 0), this.mesh.add(b);
    var z = new THREE.BoxGeometry(4, 20, 4);
    z.applyMatrix((new THREE.Matrix4).makeTranslation(0, 10, 0));
    var B = new THREE.MeshPhongMaterial({
            color: Colors.red,
            shading: THREE.FlatShading
        }),
        G = new THREE.Mesh(z, B);
    G.position.set(-35, -5, 0), G.rotation.z = -.3, this.mesh.add(G), this.pilot = new Pilot, this.pilot.mesh.position.set(-10, 27, 0), this.mesh.add(this.pilot.mesh), this.mesh.castShadow = !0, this.mesh.receiveShadow = !0
};

function createPlane() {
    (airplane = new AirPlane).mesh.scale.set(.25, .25, .25), airplane.mesh.position.y = game.planeDefaultHeight, scene.add(airplane.mesh)
}

function createSea() {
    (sea = new Sea).mesh.position.y = -game.seaRadius, scene.add(sea.mesh)
}

function createSky() {
    sky = new Sky, sky.mesh.position.y = -game.seaRadius, scene.add(sky.mesh)
}

function createCoins() {
    coinsHolder = new CoinsHolder(20), scene.add(coinsHolder.mesh)
}

function createEnnemies() {
    for (var e = 0; e < 10; e++) {
        var a = new Ennemy;
        ennemiesPool.push(a)
    }
    ennemiesHolder = new EnnemiesHolder, scene.add(ennemiesHolder.mesh)
}

function createParticles() {
    for (var e = 0; e < 10; e++) {
        var a = new Particle;
        particlesPool.push(a)
    }
    particlesHolder = new ParticlesHolder, scene.add(particlesHolder.mesh)
}

function loop() {
    newTime = (new Date).getTime(), deltaTime = newTime - oldTime, oldTime = newTime, "playing" == game.status ? (Math.floor(game.distance) % game.distanceForCoinsSpawn == 0 && Math.floor(game.distance) > game.coinLastSpawn && (game.coinLastSpawn = Math.floor(game.distance), coinsHolder.spawnCoins()), Math.floor(game.distance) % game.distanceForSpeedUpdate == 0 && Math.floor(game.distance) > game.speedLastUpdate && (game.speedLastUpdate = Math.floor(game.distance), game.targetBaseSpeed += game.incrementSpeedByTime * deltaTime), Math.floor(game.distance) % game.distanceForEnnemiesSpawn == 0 && Math.floor(game.distance) > game.ennemyLastSpawn && (game.ennemyLastSpawn = Math.floor(game.distance), ennemiesHolder.spawnEnnemies()), Math.floor(game.distance) % game.distanceForLevelUpdate == 0 && Math.floor(game.distance) > game.levelLastUpdate && (game.levelLastUpdate = Math.floor(game.distance), game.level++, fieldLevel.innerHTML = Math.floor(game.level), game.targetBaseSpeed = game.initSpeed + game.incrementSpeedByLevel * game.level),
     updatePlane(), updateDistance(), updateEnergy(),
      game.baseSpeed += (game.targetBaseSpeed - game.baseSpeed) * deltaTime * .02, game.speed = game.baseSpeed * game.planeSpeed) : "gameover" == game.status ? (game.speed *= .99, airplane.mesh.rotation.z += 2e-4 * (-Math.PI / 2 - airplane.mesh.rotation.z) * deltaTime, airplane.mesh.rotation.x += 3e-4 * deltaTime, game.planeFallSpeed *= 1.05, airplane.mesh.position.y -= game.planeFallSpeed * deltaTime, airplane.mesh.position.y < -200 && (showReplay(), game.status = "waitingReplay")) : game.status, airplane.propeller.rotation.x += .2 + game.planeSpeed * deltaTime * .005, sea.mesh.rotation.z += game.speed * deltaTime, sea.mesh.rotation.z > 2 * Math.PI && (sea.mesh.rotation.z -= 2 * Math.PI), ambientLight.intensity += (.5 - ambientLight.intensity) * deltaTime * .005, 
    coinsHolder.rotateCoins(), ennemiesHolder.rotateEnnemies(), sky.moveClouds(), sea.moveWaves(), renderer.render(scene, camera), requestAnimationFrame(loop)
}

function updateDistance() {
    game.distance += game.speed * deltaTime * game.ratioSpeedDistance, fieldDistance.innerHTML = Math.floor(game.distance);
    var e = 502 * (1 - game.distance % game.distanceForLevelUpdate / game.distanceForLevelUpdate);
    levelCircle.setAttribute("stroke-dashoffset", e)
}
Sky = function() {
    this.mesh = new THREE.Object3D, this.nClouds = 20, this.clouds = [];
    for (var e = 2 * Math.PI / this.nClouds, a = 0; a < this.nClouds; a++) {
        var n = new Cloud;
        this.clouds.push(n);
        var t = e * a,
            i = game.seaRadius + 150 + 200 * Math.random();
        n.mesh.position.y = Math.sin(t) * i, n.mesh.position.x = Math.cos(t) * i, n.mesh.position.z = -300 - 500 * Math.random(), n.mesh.rotation.z = t + Math.PI / 2;
        var s = 1 + 2 * Math.random();
        n.mesh.scale.set(s, s, s), this.mesh.add(n.mesh)
    }
}, Sky.prototype.moveClouds = function() {
    for (var e = 0; e < this.nClouds; e++) {
        this.clouds[e].rotate()
    }
    this.mesh.rotation.z += game.speed * deltaTime
}, Sea = function() {
    var e = new THREE.CylinderGeometry(game.seaRadius, game.seaRadius, game.seaLength, 40, 10);
    e.applyMatrix((new THREE.Matrix4).makeRotationX(-Math.PI / 2)), e.mergeVertices();
    var a = e.vertices.length;
    this.waves = [];
    for (var n = 0; n < a; n++) {
        var t = e.vertices[n];
        this.waves.push({
            y: t.y,
            x: t.x,
            z: t.z,
            ang: Math.random() * Math.PI * 2,
            amp: game.wavesMinAmp + Math.random() * (game.wavesMaxAmp - game.wavesMinAmp),
            speed: game.wavesMinSpeed + Math.random() * (game.wavesMaxSpeed - game.wavesMinSpeed)
        })
    }
    var i = new THREE.MeshPhongMaterial({
        color: Colors.blue,
        transparent: !0,
        opacity: .8,
        shading: THREE.FlatShading
    });
    this.mesh = new THREE.Mesh(e, i), this.mesh.name = "waves", this.mesh.receiveShadow = !0
}, Sea.prototype.moveWaves = function() {
    for (var e = this.mesh.geometry.vertices, a = e.length, n = 0; n < a; n++) {
        var t = e[n],
            i = this.waves[n];
        t.x = i.x + Math.cos(i.ang) * i.amp, t.y = i.y + Math.sin(i.ang) * i.amp, i.ang += i.speed * deltaTime, this.mesh.geometry.verticesNeedUpdate = !0
    }
}, Cloud = function() {
    this.mesh = new THREE.Object3D, this.mesh.name = "cloud";
    for (var e = new THREE.CubeGeometry(20, 20, 20), a = new THREE.MeshPhongMaterial({
            color: Colors.white
        }), n = 3 + Math.floor(3 * Math.random()), t = 0; t < n; t++) {
        var i = new THREE.Mesh(e.clone(), a);
        i.position.x = 15 * t, i.position.y = 10 * Math.random(), i.position.z = 10 * Math.random(), i.rotation.z = Math.random() * Math.PI * 2, i.rotation.y = Math.random() * Math.PI * 2;
        var s = .1 + .9 * Math.random();
        i.scale.set(s, s, s), this.mesh.add(i), i.castShadow = !0, i.receiveShadow = !0
    }
}, Cloud.prototype.rotate = function() {
    for (var e = this.mesh.children.length, a = 0; a < e; a++) {
        var n = this.mesh.children[a];
        n.rotation.z += .005 * Math.random() * (a + 1), n.rotation.y += .002 * Math.random() * (a + 1)
    }
}, Ennemy = function() {
    var e = new THREE.TetrahedronGeometry(8, 2),
        a = new THREE.MeshPhongMaterial({
            color: Colors.red,
            shininess: 0,
            specular: 16777215,
            shading: THREE.FlatShading
        });
    this.mesh = new THREE.Mesh(e, a), this.mesh.castShadow = !0, this.angle = 0, this.dist = 0
}, EnnemiesHolder = function() {
    this.mesh = new THREE.Object3D, this.ennemiesInUse = []
}, EnnemiesHolder.prototype.spawnEnnemies = function() {
    for (var e = game.level, a = 0; a < e; a++) {
        var n;
        (n = ennemiesPool.length ? ennemiesPool.pop() : new Ennemy).angle = -.1 * a, n.distance = game.seaRadius + game.planeDefaultHeight + (2 * Math.random() - 1) * (game.planeAmpHeight - 20), n.mesh.position.y = -game.seaRadius + Math.sin(n.angle) * n.distance, n.mesh.position.x = Math.cos(n.angle) * n.distance, this.mesh.add(n.mesh), this.ennemiesInUse.push(n)
    }
}, EnnemiesHolder.prototype.rotateEnnemies = function() {
    for (var e = 0; e < this.ennemiesInUse.length; e++) {
        var a = this.ennemiesInUse[e];
        a.angle += game.speed * deltaTime * game.ennemiesSpeed, a.angle > 2 * Math.PI && (a.angle -= 2 * Math.PI), a.mesh.position.y = -game.seaRadius + Math.sin(a.angle) * a.distance, a.mesh.position.x = Math.cos(a.angle) * a.distance, a.mesh.rotation.z += .1 * Math.random(), a.mesh.rotation.y += .1 * Math.random();
        var n = airplane.mesh.position.clone().sub(a.mesh.position.clone()),
            t = n.length();
        t < game.ennemyDistanceTolerance ? (particlesHolder.spawnParticles(a.mesh.position.clone(), 15, Colors.red, 3), ennemiesPool.unshift(this.ennemiesInUse.splice(e, 1)[0]), this.mesh.remove(a.mesh), game.planeCollisionSpeedX = 100 * n.x / t, game.planeCollisionSpeedY = 100 * n.y / t, ambientLight.intensity = 2, removeEnergy(), e--) : a.angle > Math.PI && (ennemiesPool.unshift(this.ennemiesInUse.splice(e, 1)[0]), this.mesh.remove(a.mesh), e--)
    }
}, Particle = function() {
    var e = new THREE.TetrahedronGeometry(3, 0),
        a = new THREE.MeshPhongMaterial({
            color: 39321,
            shininess: 0,
            specular: 16777215,
            shading: THREE.FlatShading
        });
    this.mesh = new THREE.Mesh(e, a)
}, Particle.prototype.explode = function(e, a, n) {
    var t = this,
        i = this.mesh.parent;
    this.mesh.material.color = new THREE.Color(a), this.mesh.material.needsUpdate = !0, this.mesh.scale.set(n, n, n);
    var s = e.x + 50 * (2 * Math.random() - 1),
        o = e.y + 50 * (2 * Math.random() - 1),
        r = .6 + .2 * Math.random();
    TweenMax.to(this.mesh.rotation, r, {
        x: 12 * Math.random(),
        y: 12 * Math.random()
    }), TweenMax.to(this.mesh.scale, r, {
        x: .1,
        y: .1,
        z: .1
    }), TweenMax.to(this.mesh.position, r, {
        x: s,
        y: o,
        delay: .1 * Math.random(),
        ease: Power2.easeOut,
        onComplete: function() {
            i && i.remove(t.mesh), t.mesh.scale.set(1, 1, 1), particlesPool.unshift(t)
        }
    })
}, ParticlesHolder = function() {
    this.mesh = new THREE.Object3D, this.particlesInUse = []
}, ParticlesHolder.prototype.spawnParticles = function(e, a, n, t) {
    for (var i = a, s = 0; s < i; s++) {
        var o;
        o = particlesPool.length ? particlesPool.pop() : new Particle, this.mesh.add(o.mesh), o.mesh.visible = !0;
        o.mesh.position.y = e.y, o.mesh.position.x = e.x, o.explode(e, n, t)
    }
}, Coin = function() {
    var e = new THREE.TetrahedronGeometry(5, 0),
        a = new THREE.MeshPhongMaterial({
            color: 39321,
            shininess: 0,
            specular: 16777215,
            shading: THREE.FlatShading
        });
    this.mesh = new THREE.Mesh(e, a), this.mesh.castShadow = !0, this.angle = 0, this.dist = 0
}, CoinsHolder = function(e) {
    this.mesh = new THREE.Object3D, this.coinsInUse = [], this.coinsPool = [];
    for (var a = 0; a < e; a++) {
        var n = new Coin;
        this.coinsPool.push(n)
    }
}, CoinsHolder.prototype.spawnCoins = function() {
    for (var e = 1 + Math.floor(10 * Math.random()), a = game.seaRadius + game.planeDefaultHeight + (2 * Math.random() - 1) * (game.planeAmpHeight - 20), n = 10 + Math.round(10 * Math.random()), t = 0; t < e; t++) {
        var i;
        i = this.coinsPool.length ? this.coinsPool.pop() : new Coin, this.mesh.add(i.mesh), this.coinsInUse.push(i), i.angle = -.02 * t, i.distance = a + Math.cos(.5 * t) * n, i.mesh.position.y = -game.seaRadius + Math.sin(i.angle) * i.distance, i.mesh.position.x = Math.cos(i.angle) * i.distance
    }
}, CoinsHolder.prototype.rotateCoins = function() {
    for (var e = 0; e < this.coinsInUse.length; e++) {
        var a = this.coinsInUse[e];
        if (!a.exploding) a.angle += game.speed * deltaTime * game.coinsSpeed, a.angle > 2 * Math.PI && (a.angle -= 2 * Math.PI), a.mesh.position.y = -game.seaRadius + Math.sin(a.angle) * a.distance, a.mesh.position.x = Math.cos(a.angle) * a.distance, a.mesh.rotation.z += .1 * Math.random(), a.mesh.rotation.y += .1 * Math.random(), airplane.mesh.position.clone().sub(a.mesh.position.clone()).length() < game.coinDistanceTolerance ? (this.coinsPool.unshift(this.coinsInUse.splice(e, 1)[0]), this.mesh.remove(a.mesh), particlesHolder.spawnParticles(a.mesh.position.clone(), 5, 39321, .8), addEnergy(), e--) : a.angle > Math.PI && (this.coinsPool.unshift(this.coinsInUse.splice(e, 1)[0]), this.mesh.remove(a.mesh), e--)
    }
};
var fieldDistance, energyBar, replayMessage, fieldLevel, levelCircle, blinkEnergy = !1;

function updateEnergy() {
    game.energy -= game.speed * deltaTime * game.ratioSpeedEnergy, game.energy = Math.max(0, game.energy), energyBar.style.right = 100 - game.energy + "%", energyBar.style.backgroundColor = game.energy < 50 ? "#f25346" : "#68c3c0", game.energy < 30 ? energyBar.style.animationName = "blinking" : energyBar.style.animationName = "none", game.energy < 1 && (game.status = "gameover")
}

function addEnergy() {
    game.energy += game.coinValue, game.energy = Math.min(game.energy, 100)
}

function removeEnergy() {
    game.energy -= game.ennemyValue, game.energy = Math.max(0, game.energy)
}

function updatePlane() {
    game.planeSpeed = normalize(mousePos.x, -.5, .5, game.planeMinSpeed, game.planeMaxSpeed);
    var e = normalize(mousePos.y, -.75, .75, game.planeDefaultHeight - game.planeAmpHeight, game.planeDefaultHeight + game.planeAmpHeight),
        a = normalize(mousePos.x, -1, 1, .7 * -game.planeAmpWidth, -game.planeAmpWidth);
    game.planeCollisionDisplacementX += game.planeCollisionSpeedX, a += game.planeCollisionDisplacementX, game.planeCollisionDisplacementY += game.planeCollisionSpeedY, e += game.planeCollisionDisplacementY, airplane.mesh.position.y += (e - airplane.mesh.position.y) * deltaTime * game.planeMoveSensivity, airplane.mesh.position.x += (a - airplane.mesh.position.x) * deltaTime * game.planeMoveSensivity, airplane.mesh.rotation.z = (e - airplane.mesh.position.y) * deltaTime * game.planeRotXSensivity, airplane.mesh.rotation.x = (airplane.mesh.position.y - e) * deltaTime * game.planeRotZSensivity;
    normalize(game.planeSpeed, game.planeMinSpeed, game.planeMaxSpeed, game.cameraNearPos, game.cameraFarPos);
    

    camera.fov = normalize(mousePos.x, -1, 1, 40, 80),

     camera.updateProjectionMatrix(), camera.position.y += (airplane.mesh.position.y - camera.position.y) * deltaTime * game.cameraSensivity, game.planeCollisionSpeedX += (0 - game.planeCollisionSpeedX) * deltaTime * .03, game.planeCollisionDisplacementX += (0 - game.planeCollisionDisplacementX) * deltaTime * .01, game.planeCollisionSpeedY += (0 - game.planeCollisionSpeedY) * deltaTime * .03, game.planeCollisionDisplacementY += (0 - game.planeCollisionDisplacementY) * deltaTime * .01, airplane.pilot.updateHairs()
}

function showReplay() {
    replayMessage.style.display = "block"
}

function hideReplay() {
    replayMessage.style.display = "none"
}

function normalize(e, a, n, t, i) {
    return t + (Math.max(Math.min(e, n), a) - a) / (n - a) * (i - t)
}

function init(e) {
    fieldDistance = document.getElementById("distValue"), energyBar = document.getElementById("energyBar"), replayMessage = document.getElementById("replayMessage"), fieldLevel = document.getElementById("levelValue"), levelCircle = document.getElementById("levelCircleStroke"), resetGame(), createScene(), createLights(), createPlane(), createSea(), createSky(), createCoins(), createEnnemies(), createParticles(), document.addEventListener("mousemove", handleMouseMove, !1), document.addEventListener("touchmove", handleTouchMove, !1), document.addEventListener("mouseup", handleMouseUp, !1), document.addEventListener("touchend", handleTouchEnd, !1), loop()
}
window.addEventListener("load", init, !1);