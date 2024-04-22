{{-- Google Maps Api --}}
<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
    ({key: "AIzaSyCPobPV2hJo1kF6LltI00A_OQskVGjT47M", v: "weekly"});</script>

{{-- Chart JS API --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Google Maps Api Start
    let map;

    async function initMap() {
        const { Map } = await google.maps.importLibrary("maps");

        map = new Map(document.getElementById("map"), {
            center: { lat: -6.195399570317724, lng: 106.82234646755822 },
            zoom: 16,
        });

        new google.maps.Marker({
            position: { lat: -6.195399570317724, lng: 106.82234646755822 },
            map,
            title: "Hello World!",
        });
    }

    initMap();
    // Google Maps Api End
    
    // Typed Js Start
    
    // Typed Js End
    
    // Chart Js Start
    const ctx = document.getElementById('security-chart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2018','2019', '2020', '2021', '2022', '2023'],
            datasets: [{
                label: '% of Corporation Security Risk from 2018-2023',
                data: [13, 10, 20, 12, 15, 20],
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    // Chart Js End
</script>