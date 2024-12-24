<script>
    import { router } from "@inertiajs/svelte";

    export let personajes;

    async function Enviar_Datos(event) {
        event.preventDefault();

        router.post("/", {
            nombre: document.getElementById("nombre").value,
            clan: document.getElementById("clan").value,
            edad: document.getElementById("edad").value,
        });
    }

    async function Borrar_Dato(id) {
        try {
            router.delete(`/${id}`);
            console.log("Dato eliminado con éxito");
        } catch (error) {
            console.error("Error al eliminar:", error);
        }
    }

    async function Obtener_Dato(personaje) {
        if (personaje === undefined) {
            return;
        } else {
            document.getElementById("botonGuardar").innerText =
                "Actualizar Personaje";
        }
        document.getElementById("nombre").value = personaje.nombre;
        document.getElementById("clan").value = personaje.clan;
        document.getElementById("edad").value = personaje.edad;

        document
            .getElementById("botonGuardar")
            .addEventListener("click", function () {
                router.put(`/${personaje.id}`, {
                    nombre: document.getElementById("nombre").value,
                    clan: document.getElementById("clan").value,
                    edad: document.getElementById("edad").value,
                });
            });

        document
            .getElementById("botonGuardar")
            .addEventListener("click", function () {
                document.getElementById("botonGuardar").innerText =
                    "Crear Personaje";
            });
    }
</script>

<h1>Lista de Personajes</h1>

<div>
    <form on:submit={Enviar_Datos}>
        <input type="text" placeholder="Nombre" name="nombre" id="nombre" />
        <input type="text" placeholder="Clan" name="clan" id="clan" />
        <input type="text" placeholder="Edad" name="edad" id="edad" />
        <button type="submit" id="botonGuardar">Crear Personaje</button>
    </form>
</div>

<div>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Clan</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            {#each personajes as personaje}
                <tr>
                    <td>{personaje.nombre}</td>
                    <td>{personaje.clan}</td>
                    <td>{personaje.edad}</td>
                    <td>
                        <button on:click={() => Obtener_Dato(personaje)}
                            >Editar</button
                        >
                        <button on:click={() => Borrar_Dato(personaje.id)}
                            >Eliminar</button
                        >
                    </td>
                </tr>
            {/each}
        </tbody>
    </table>
</div>
