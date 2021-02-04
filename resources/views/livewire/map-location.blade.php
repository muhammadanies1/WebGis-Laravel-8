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
                            "image"         : "https://images.unsplash.com/photo-1612298423159-dccda132f28d?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
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
                            "image"         : "https://images.unsplash.com/photo-1612361814394-35785ba16dc3?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
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
                            "image"         : "https://images.unsplash.com/photo-1612356700845-4b3fd814f44e?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
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
                            "image"         : "https://images.unsplash.com/photo-1612373958262-719771ecbb3e?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMnx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
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
                            "image"         : "https://images.unsplash.com/photo-1612361808300-da9583e1b34e?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
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
                            "image"         : "https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?ixid=MXwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyNXx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
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

                    //styling dari marker
                    let markerElement                   = document.createElement('div')
                    markerElement.className             = 'marker' + locationId
                    markerElement.id                    = locationId
                    markerElement.style.backgroundImage = 'url(https://docs.mapbox.com/help/demos/custom-markers-gl-js/mapbox-icon.png)'
                    markerElement.style.backgroundSize  = 'cover'
                    markerElement.style.width           = '50px'
                    markerElement.style.height          = '50px'

                    //styling pada pop up. petik yang digunakan adalah backtick
                    const content = `
                        <div style="overflow-y, auto; max-height:400px,width:100%">
                            <table class="table table-sm mt-2">
                                <tbody>
                                    <tr>
                                        <td>Title</td>
                                        <td>${title}</td>
                                    </tr>
                                    <tr>
                                        <td>Picture</td>
                                        <td><img src="${image}" loading="lazy" class="img-fluid"></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>${description}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    `

                    /// menampilkan pop up
                    const popUp = new mapboxgl.Popup({
                        offset:25
                    }).setHTML(content).setMaxWidth("400px")

                    //menampilkan marker
                    new mapboxgl.Marker(markerElement)
                    .setLngLat(geometry.coordinates)
                    .setPopup(popUp)
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
