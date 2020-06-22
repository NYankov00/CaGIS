<head>
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css"
        type="text/css">
    <link rel="stylesheet"
        href="https://rawcdn.githack.com/walkermatt/ol3-layerswitcher/master/src/ol3-layerswitcher.css" type="text/css">
    <style>
        .map {
            height: 100%;
            width: 100%;
        }

        .selectrect:hover,
        .selectrect:focus,
        .selectrect:target {
            opacity: 1;
            border-width: 3px;
            border-color: #000066;
        }
    </style>
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    <script src="https://rawcdn.githack.com/walkermatt/ol3-layerswitcher/master/src/ol3-layerswitcher.js"></script>

</head>

<body>
    <div id="map" class="map">
    </div>

    <script type="text/javascript">

        var url = 'http://inspire.cadastre.bg:6080/arcgis/rest/services/GN/MapServer'; //Arcgis REST API for INPSIRE View service -  layer Geographical names, binding 3 layers (S,L,P)
        var url1 = 'http://inspire.cadastre.bg:6080/arcgis/services/GN/MapServer/WmsServer';//ArcGIS Wms server for 3 layers - Point(P), line(L), Surface (S)
     
        function drawRectangle() {
		    var dragBox = new ol.interaction.DragBox({
            condition: ol.events.condition.platformModifierKeyOnly
            });
	        map.addInteraction(dragBox);
	  
	        dragBox.on('boxend', function(){
                var extent = dragBox.getGeometry().getExtent();
			    var extentJSON = "{xmin: "+extent[0] +", ymin: "+extent[1]+", xmax: "+extent[2]+", ymax: "+extent[3]+"}"; 
			    alert(extentJSON);
                layerid = '3';
                postQuery(extentJSON,layerid);
	        })  
	    }

        function postQuery (rect, layer) { //Select rectangle (Ctrl+LMB) and receive info for selected Geographical names objects
            var url = 'http://inspire.cadastre.bg:6080/arcgis/rest/services/GN/MapServer/'+layer+'/query?where=&';
            url = url +'text=&objectIds=&time=&geometry='+rect + '&geometryType=esriGeometryEnvelope&inSR=&spatialRel=esriSpatialRelIntersects&' +
                'relationParam=&outFields=*&returnGeometry=true&maxAllowableOffset=&geometryPrecision=&outSR=&returnIdsOnly=&'+
                'returnCountOnly=&orderByFields=&groupByFieldsForStatistics=&outStatistics=&returnZ=false&'+
                'returnM=false&gdbVersion=&returnDistinctValues=false&f=json';

                infoWindow = window.open(url, "_blank", "width=800,height=600");


        }


        var styles = [
        'Road',
        'RoadOnDemand',
        'Aerial',
        'AerialWithLabels'
        ];
        var layerBING = new ol.layer.Tile({
            id: 'bing',
            title: 'Bing orthophoto',
            visible: false,
            preload: Infinity,
            source: new ol.source.BingMaps({
                key:'AjbGFORw5fFmL49DStsxATGxY1GL23syU62w78VE_QIcWIBk0W83VCSI6tmF95Qt',
                imagerySet:styles[3],
                maxZoom: 19
        })
        }); 
        
        var HERE_AppID='LGGAiSmIg5hqvflUPUZf';
        var HERE_AppCode = '6U1IiEJroDfQHpPHBopBQw';

        //HERE Web Map layer
        var hereLayersDescription = [
        {
          base: 'base',
          type: 'maptile',
          scheme: 'normal.day'
        },
        {
          base: 'base',
          type: 'maptile',
          scheme: 'normal.day.transit'
        },
        {
          base: 'base',
          type: 'maptile',
          scheme: 'pedestrian.day'
        },
        {
          base: 'aerial',
          type: 'maptile',
          scheme: 'terrain.day'
        },
        {
          base: 'aerial',
          type: 'maptile',
          scheme: 'satellite.day'
        },
        {
          base: 'aerial',
          type: 'maptile',
          scheme: 'hybrid.day'
        }
      ];
        var urlTemplate = 'https://2.{base}.maps.cit.api.here.com' +
        '/{type}/2.1/maptile/newest/{scheme}/{z}/{x}/{y}/256/png' +
        '?app_id={'+HERE_AppID+'}&app_code={'+HERE_AppCode+'}';

        HERE_url = urlTemplate
                            .replace('{base}', hereLayersDescription[3].base)
                            .replace('{type}', hereLayersDescription[3].type)
                            .replace('{scheme}', hereLayersDescription[3].scheme);
        
        var u = 'https://3.aerial.maps.api.here.com/maptile/2.1/maptile/newest/normal.day/{z}/{x}/{y}/256/png'+
        '?app_id={LGGAiSmIg5hqvflUPUZf}&app_code={6U1IiEJroDfQHpPHBopBQw}'
        hereLayer = new ol.layer.Tile({
            visible: false,
            preload: Infinity,
            source: new ol.source.XYZ({
                url:u,
                attributions: 'Map Tiles &copy; ' + new Date().getFullYear() + ' ' +
              '<a href="http://developer.here.com">HERE</a>'
            })

        });

        var layerGeographicalNames = new ol.layer.Tile({
                    id: 'GN',
                    title: "Geographical Names",
                    source: new ol.source.TileArcGISRest({
                        url: url
                    })
        });

        var layerGNSurface = new ol.layer.Image({
                    id:'GN_Surface',
                    title: 'Geographical Names (Surface)',
                    source: new ol.source.ImageWMS({
                        url: url1,
                        params: { 'LAYERS': '1' }
                    })
                });

        var layerGNLine =  new ol.layer.Image({
                    title: 'Geographical Names (Lines)',
                    source: new ol.source.ImageWMS({
                        url: url1,
                        params: { 'LAYERS': '3' }
                    })
        });

        var layerGNPoint = new ol.layer.Image({
                    title: 'Geographical Names (Points)',
                    source: new ol.source.ImageWMS({
                        url: url1,
                        params: { 'LAYERS': '2' }
                    })
        })

        layerGeographicalNames.setZIndex(3); // There are 5 layers (OSM, GN, GN-line, GN-Points, GN-Surface). GN.setZIndex(3) makes layer GN always on top! 
        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    title: "OSM",
                    source: new ol.source.OSM()
                }),
                layerBING,
                layerGeographicalNames,
               // hereLayer//,
                layerGNPoint,
                layerGNLine,
                layerGNSurface
            ],
            view: new ol.View({
                projection: 'EPSG:4326',
                center: ([23.35, 42.67]),
                extent: [23.19, 42.78, 23.50, 42.62],
                zoom: 12
            })
        })
        
        map.addControl(new ol.control.LayerSwitcher(map));
    </script>
</body>
@extends('layout')

@section ('content')
<div class="categories">

    <article class="container">
        <img src="{{ URL::to('/images/about.jpg') }}" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text"><a href="####">За нас</a></div>
        </div>
    </article>

    <article class="container">
        <img src="{{ URL::to('/images/services.jpg') }}" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text"><a href="####">Услуги</a></div>
        </div>
    </article>

    <article class="container">
        <img src="{{ URL::to('/images/projects.jpg') }}" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text"><a href="####">Проекти</a></div>
        </div>
    </article>

    <article class="container">
        <img src="{{ URL::to('/images/contacts.jpg') }}" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text"><a href="####">Контакти</a></div>
        </div>
    </article>



</div>

@endsection