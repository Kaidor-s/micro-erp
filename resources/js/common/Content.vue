<template>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ data.header }}</div>

                        <div class="panel-body">
                            {{ data.text }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Content',
        data (){
            return {
                header: 'Test text!',
                text: 'Hello world',
            }
        }
    }
</script>
