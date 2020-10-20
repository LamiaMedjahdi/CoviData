

<style>
#maps-algerie {
    height: 500px; 
    min-width: 310px; 
    max-width: 800px; 
    margin: 0 auto; 
}
.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;
}

</style>



<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/dz/dz-all.js"></script>

<div id="maps-algerie"></div>


{{-- 
     // Prepare demo data
// Data is joined to map using value of 'hc-key' property by default.
// See API docs for 'joinBy' for more info on linking data and map.  --}}

<script>
    var data = [
    ['dz-ml', <?php echo $mila; ?>],
    ['dz-ob', <?php echo $oumbouagui; ?>],
    ['dz-sa', <?php echo $soukahras; ?>],
    ['dz-tb', <?php echo $tebessa; ?>],
    ['dz-il', <?php echo $illizi; ?>],
    ['dz-at', <?php echo $temouchent; ?>],
    ['dz-or', <?php echo $oran; ?>],
    ['dz-sb', <?php echo $sba; ?>],
    ['dz-tl', <?php echo $tlemcen; ?>],
    ['dz-tn', <?php echo $tindouf; ?>],
    ['dz-bc', <?php echo $bechar; ?>],
    ['dz-na', <?php echo $naama; ?>],
    ['dz-ar', <?php echo $adrar; ?>],
    ['dz-an', <?php echo $annaba; ?>],
    ['dz-et', <?php echo $taref; ?>],
    ['dz-jj', <?php echo $jijel; ?>],
    ['dz-sk', <?php echo $skikda; ?>],
    ['dz-eb', <?php echo $jijel; ?>],
    ['dz-tm', <?php echo $tamnrasset; ?>],
    ['dz-gr', <?php echo $ghardaia; ?>],
    ['dz-lg', <?php echo $laghouat; ?>],
    ['dz-og', <?php echo $ourgla; ?>],
    ['dz-al', <?php echo $alger; ?>],
    ['dz-bm', <?php echo $boumerdes; ?>],
    ['dz-to', <?php echo $tizi; ?>],
    ['dz-tp', <?php echo $tipaza; ?>],
    ['dz-ad', <?php echo $aindefla; ?>],
    ['dz-ch', <?php echo $chlef; ?>],
    ['dz-mc', <?php echo $mascara; ?>],
    ['dz-mg', <?php echo $mosta; ?>],
    ['dz-re', <?php echo $relizane; ?>],
    ['dz-sd', <?php echo $lbayadh; ?>],
    ['dz-tr', <?php echo $tiaret; ?>],
    ['dz-ts', <?php echo $tissemsilt; ?>],
    ['dz-bj', <?php echo $bedjaia; ?>],
    ['dz-bb', <?php echo $bba; ?>],
    ['dz-bl', <?php echo $blida; ?>],
    ['dz-bu', <?php echo $bouira; ?>],
    ['dz-1950',<?php echo $loued; ?>],
    ['dz-bs', <?php echo $biskra; ?>],
    ['dz-dj', <?php echo $djelfa; ?>],
    ['dz-md', <?php echo $medea; ?>],
    ['dz-ms', <?php echo $msila; ?>],
    ['dz-sf', <?php echo $setif; ?>],
    ['dz-bt', <?php echo $batna; ?>],
    ['dz-co', <?php echo $constantine; ?>],
    ['dz-gl', <?php echo $guelma; ?>],
    ['dz-kh', <?php echo $khenchela; ?>],
];

// Create the chart
Highcharts.mapChart('maps-algerie', {
    chart: {
        map: 'countries/dz/dz-all'
    },

    title: {
        text: 'Cas du covid 19 en algérie par région'
    },

    subtitle: {
        text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/dz/dz-all.js">Algeria</a>'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
       name: 'Nombre de cas',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});
</script>



