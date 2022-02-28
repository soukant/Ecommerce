<template>
    <div class="product box-shadow bg-fff mb-4">
        <div class="product-title home3-bg text-uppercase">
            <i class="fa fa-paper-plane-o icon home3-bg2"></i>
            <h3>New Products</h3>
        </div>
        <div class="left left-right-angle">
            <div class="row">
                <div class="col-md-3">
                    <div class="product-wrapper bl">
                        <div class="product-img">
                            <a href="#">
                                <img src="http://127.0.0.1:8000/contents/website/img/product/5.jpg" alt="" class="primary">
                                <img src="http://127.0.0.1:8000/contents/website/img/product/6.jpg" alt="" class="secondary">
                            </a>
                           
                        </div>
                        <div class="product-content home3-hover">
                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>&amp;300.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import NewFooter from 'component'

    export default {
        components: {

        },
        name: 'default',
        mounted: () => {
            console.log('Component mounted.');
        },
        created: function () {
            console.log('Component created.');
        },
        data: ()=>{
            return{
                data : [],
                form : new Form({
                    'name' : '',
                    'roll' : '',
                })
            }
        },
        methods: {
            loadData : ()=>{

            },
        }
    }
</script>
