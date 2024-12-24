<script>
    export let personajes;

    console.log(personajes);
    
</script>

<h1>Lista de Personajes</h1>

<div>
    <button>Crear Personaje</button>
</div>

{#each personajes as personaje}
    <div>
        <p>{personaje.nombre}</p>
        <p>{personaje.clan}</p>
        <p>{personaje.edad}</p>
    </div>
{/each}
