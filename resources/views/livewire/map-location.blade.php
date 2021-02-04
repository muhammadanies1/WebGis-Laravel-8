<div class="container-fluid">

    <div class="row">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    MapBox
                </div>
                <div class="card-body">
                    <div wire:ignore id='map' style='width: 100%; height: 70vh;'></div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Form
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Longtitude</label>
                                    <input wire:model="long" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Lattitude</label>
                                    <input wire:model="lat" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>

</div>

@push('scripts')

    <script>

        /// eventlistener ini berfungsi untuk memastikan fungsi livewire di load dulu,
            /// setelah ter load maka baru jalankan kode tersebut.
                /// pembungkusan ini penting supaya berjalan dengan teratur
        document.addEventListener('livewire:load', () => {
            const defaultLocation = [110.63226017774304, -6.889704681630519] /// lokasi default untuk menampilkan maps
                                                                        /// default tersebut berada di Demak
            mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
            var map = new mapboxgl.Map({
                container: 'map',
                center: defaultLocation,
                zoom: 11.15
            });

            /// data tentang titik koordinat pera dll
            const geoJson = {
                "type"      : "FeatureCollection",
                "features"  : [
                    {
                        "type"      : "Feature",
                        "geometry"  : {
                            "coordinates"   : ["110.68130321458278","-6.889397496088364"],
                            "type"          : "Point"
                    },
                        "properties": {
                            "message"       : "Mantap",
                            "iconSize"      : [50,50],
                            "locationId"    : 30,
                            "title"         : "Hello new",
                            "image"         : "1a1eb1e4106fff0cc3467873f0f39cab.jpeg",
                            "description"   : "Mantap"
                    }
                },
                    {
                        "type"      : "Feature",
                        "geometry"  : {
                            "coordinates"   : ["110.6101366627027","-6.866972414530693"],
                            "type"          : "Point"
                        },
                        "properties": {
                            "message"       : "oke mantap Edit",
                            "iconSize"      : [50,50],
                            "locationId"    : 29,
                            "title"         : "Rumah saya Edit",
                            "image"         : "0ea59991df2cb96b4df6e32307ea20ff.png",
                            "description"   : "oke mantap Edit"
                        }
                },
                    {
                        "type"          : "Feature",
                        "geometry"      : {
                            "coordinates"   : ["110.55041864308163","-6.8540698335605725"],
                            "type"          : "Point"
                        },
                        "properties"    : {
                            "message"       : "Update Baru",
                            "iconSize"      : [50,50],
                            "locationId"    : 22,
                            "title"         : "Update Baru Gambar",
                            "image"         : "d09444b68d8b72daa324f97c999c2301.jpeg",
                            "description"   : "Update Baru"
                        }
                },
                    {
                        "type"      : "Feature",
                        "geometry"  : {
                            "coordinates"   : ["110.55536935973322","-6.8995345138881135"],
                            "type"          : "Point"
                        },
                        "properties": {
                            "message"       : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                            "iconSize"      : [50,50],
                            "locationId"    : 19,
                            "title"         : "awdwad",
                            "image"         : "f0b88ffd980a764b9fca60d853b300ff.png",
                            "description"   : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                        }
                },
                    {
                        "type"      : "Feature",
                        "geometry"  : {
                            "coordinates"   : ["110.59714103148934","-6.873423573841663"],
                            "type"          : "Point"
                        },
                        "properties": {
                            "message"       : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                            "iconSize"      : [50,50],
                            "locationId"    : 18,
                            "title"         : "adwawd",
                            "image"         : "4c35cb1b76af09e6205f94024e093fe6.jpeg",
                            "description"   : "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                        }
                },
                    {
                        "type"      : "Feature",
                        "geometry"  : {
                            "coordinates"   : ["110.73328573943331","-6.926258337937568"],
                            "type"          : "Point"
                        },
                        "properties": {
                            "message"       : "awdwad",
                            "iconSize"      : [50,50],
                            "locationId"    : 12,
                            "title"         : "adawd",
                            "image"         : "7c8c949fd0499eb50cb33787d680778c.jpeg",
                            "description"   : "awdwad"
                        }
                }
            ]
            }

            ///untuk menampilkan data geoJson
            const loadLocations = () => {
                geoJson.features.forEach((location) => {
                    const {geometry, properties} = location
                    const {iconSize, locationId, title, image, description} = properties

                    let markerElement                   = document.createElement('div')
                    markerElement.className             = 'marker' + locationId
                    markerElement.id                    = locationId
                    markerElement.style.backgroundImage = 'url(https://docs.mapbox.com/help/demos/custom-markers-gl-js/mapbox-icon.png)'
                    markerElement.style.backgroundSize  = 'cover'
                    markerElement.style.width           = '50px'
                    markerElement.style.height          = '50px'

                    new mapboxgl.Marker(markerElement)
                    .setLngLat(geometry.coordinates)
                    .addTo(map)
                })
            }
            loadLocations()

            /// Style dari maps yang digunakan
            const style = "dark-v10" /// varian lain dari style map: light-v10, outdoors-v11 satellite-v9, streets-v11, dark-v10
            map.setStyle(`mapbox://styles/mapbox/${style}`)

            /// code untuk menambahkan widget navigasi pada mapBox
            map.addControl(new mapboxgl.NavigationControl())

            // fungsi untuk menampilkan latitude dan longitude ketika di klik oleh user
            map.on('click', (e) => {
                const longtitude = e.lngLat.lng
                const lattitude = e.lngLat.lat

                @this.long = longtitude
                @this.lat = lattitude
            })
        })

    </script>

@endpush
