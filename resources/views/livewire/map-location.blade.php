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

            console.log("ini value dari livewire", @this.test);

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
