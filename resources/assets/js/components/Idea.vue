<template>
    <div>
        <h2 class="text-center">Captura tus ideas</h2>
        <div class="card">
            <div class="card-body">
                <h4>¿En que estás pensando?</h4>
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control input-sm">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-sm">Agregar</button>
                        </div>
                    </div>
                </form>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <p>
                            <small class="text-muted">
                                <em>hace un minuto</em>
                            </small>
                            Mi nueva idea
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
