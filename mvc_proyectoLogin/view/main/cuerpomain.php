<div>
        <div class="row ">

            <div style="text-align: center" class="col">
                <p id="frase" style="  padding-top: 1rem;
    font-family: Georgia, Serif;
    font-weight: 500;
    font-size: x-large;"> Lista de películas para rellenar el index</p>
            </div>

        </div>


        <div class="contenedor" style="	width: 90%;max-width: 1000px;margin: 40px auto 100px auto;display: grid;grid-template-columns: repeat(4, 1fr);
    gap: 40px;" id="contenedor">

        </div>

        <div style="position: static;bottom: 0;background: transparent;width: 100%;
    display: flex;justify-content: center;gap: 20px;padding: 10px;" class="paginacion">

            <button style="cursor: pointer;border: none;display: flex;align-items: center;justify-content: center;text-align: center;height: 50px;width: 200px;
    background: #474474;color: #fff;border-radius: 100px;font-family: 'Montserrat', sans-serif;font-weight: 600;
    transition: .3s ease all;" id="btnAnterior">Anterior</button>
            <button style="cursor: pointer;border: none;display: flex;align-items: center;justify-content: center;
    text-align: center;height: 50px;width: 200px;background: #474474;color: #fff;border-radius: 100px;
    font-family: 'Montserrat', sans-serif;font-weight: 600;transition: .3s ease all;" id="btnSiguiente">Siguiente</button>
        </div>

</div>
    <script>

        let pagina = 1;
        const btnAnterior = document.getElementById('btnAnterior');
        const btnSiguiente = document.getElementById('btnSiguiente');

        // pasar a la siguinte lista
        btnSiguiente.addEventListener('click', () => {
            if (pagina < 1000) {
                pagina += 1;
                cargarPeliculas();
            }
        });

        //pasar a la anterior
        btnAnterior.addEventListener('click', () => {
            if (pagina > 1) {
                pagina -= 1;
                cargarPeliculas();

            }
        });

        const cargarPeliculas = async () => {
            try {
                const respuesta = await fetch(`https://api.themoviedb.org/3/movie/popular?api_key=192e0b9821564f26f52949758ea3c473&language=es-MX&page=${pagina}`);

                console.log(respuesta);

                // Si la respuesta es correcta
                if (respuesta.status === 200) {
                    const datos = await respuesta.json();

                    let peliculas = '';


                    datos.results.forEach(pelicula => {

                        peliculas += `
                        
                            <div class=" pelicula" style="text-align: center;">
                                <img style="width: 100%;margin-bottom: 10px; border-radius: 15px;" class="poster" src="https://image.tmdb.org/t/p/w500/${pelicula.poster_path}">
                                <h3 style="font-size: 16px; font-weight: 600;" class="titulo ">${pelicula.title}</h3>
                            </div>
                        
                `;
                    });

                    document.getElementById('contenedor').innerHTML = peliculas;

                } else if (respuesta.status === 401) {
                    console.log('Pusiste la llave mal');
                } else if (respuesta.status === 404) {
                    console.log('La pelicula que buscas no existe');
                } else {
                    console.log('Hubo un error y no sabemos que paso');
                }

            } catch (error) {
                console.log(error);
            }

        }

        cargarPeliculas();
    </script>
