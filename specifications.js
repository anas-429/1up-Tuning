var builds = [
    {
        id: 1,
        heading: '1992 Toyota MR2',
        content: '<li><span class="bold">Engine:</span> 2.0L 3S-GTE</li><li><span class="bold">Horsepower:</span> 400hp</li><li><span class="bold">Turbo:</span> Greddy T78/88 Single Turbo</li><li><span class="bold">Intake Manifold:</span> RacerX Fabrications straight-runner</li><li><span class="bold">Camshafts:</span> HKS 2202-RT064</li>',
    },
    {
        id: 2,
        heading: '1995 Toyota Supra MK4',
        content: '<li><span class="bold">Engine:</span> 3.0L 2JZ-GTE</li><li><span class="bold">Horsepower:</span> 700hp</li><li><span class="bold">Turbo:</span> Garrett GT28 Single Turbo</li><li><span class="bold">Intake Manifold:</span> Hypertune 102mm Drag Series</li><li><span class="bold">Fuel Injectors:</span> 1200cc FIC</li>',
    },
    {
        id: 3,
        heading: '1999 Mitsubishi Lancer Evo V',
        content: '<li><span class="bold">Engine:</span> 2.0L 4-Cylinder</li><li><span class="bold">Horsepower:</span> 500hp</li><li><span class="bold">Turbo:</span> Nengun T67 25G-8.0cm2 Single Turbo</li><li><span class="bold">ECU:</span> Link G4+ PlugIn</li><li><span class="bold">Camshafts:</span> HKS 272</li>',
    },
    {
        id: 4,
        heading: '2016 Volkswagen Golf GTI',
        content: '<li><span class="bold">Engine:</span> 2.0L 4-Cylinder</li><li><span class="bold">Horspower:</span> 400hp</li><li><span class="bold">Turbo:</span> HPA OEM+ IS38</li><li><span class="bold">ECU:</span> APR Stage 1</li><li><span class="bold">Clutch:</span> ECS Tuning Stage 2 Performance</li>',
    },
    {
        id: 5,
        heading: '2018 BMW M2',
        content: '<li><span class="bold">Engine:</span> 3.0L Inline-6</li><span class="bold">Horsepower:</span> 500 hp</li><li><span class="bold">Turbo:</span> Pure Turbo Stage 2+ hybrid</li><li><span class="bold">ECU:</span> PE Stage 1+ ECU</li>',
    },
    {
        id: 6,
        heading: '1998 Honda Civic EK9',
        content: '<li><span class="bold">Engine:</span> 2.4L K24</li><li><span class="bold">Horsepower:</span> 300hp</li><li><span class="bold">Intake Manifold:</span> Skunk2 Ultra Series Street</li><li><span class="bold">Fuel Injectors:</span> 550cc Grams Injectors</li><li><span class="bold">Fuel Rails:</span> Hybrid Racing</li>',
    },
    {
        id: 7,
        heading: '2000 Nissan Silvia S15',
        content: '<li><span class="bold">Engine:</span> SR20DET</li><li><span class="bold">Horsepower:</span> 500hp</li><li><span class="bold">Turbo:</span> Precision Turbo 5858 top-mount</li><li><span class="bold">Intake Manifold:</span> Hypertune High Port 90mm</li><li><span class="bold">Injectors:</span> HKS 1000cc injectors</li>',
    },
    {
        id: 8,
        heading: '1999 Nissan Skyline GT-R R34',
        content: '<li><span class="bold">Engine:</span> RB26DETT</li><li><span class="bold">Horsepower:</span> 800hp</li><li><span class="bold">Turbo:</span> HKS GT2530</li><li><span class="bold">Camshafts:</span> Tomei 262-degree cams</li><li><span class="bold">Intercooler:</span> HKS Front-Mount Intercooler</li>',
    },
]

var openModal = document.querySelectorAll('.open-modal'); 
var closeModal = document.querySelector('.exit-modal');

for(let i=0; i < openModal.length; i++) {
    openModal[i].addEventListener('click', function(e) {

        e.preventDefault();

        specs.style.display = "flex";
        specs.style.justifyContent = "center"; 
        specs.style.alignItems = "center";

        buildTitle.innerHTML = builds[i].heading;
        specsList.innerHTML = builds[i].content;

    });
    
}

closeModal.addEventListener('click', function() {
    specs.style.display = "none";
})