{{-- Google Maps Api --}}
<script>
    (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
    ({key: '{{ env('GOOGLE_MAP_API_KEY') }}', v: "weekly"});
</script>

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
</script>