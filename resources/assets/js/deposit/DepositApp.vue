<template>
	 <div class="container">
        <div class="row">
            <div class="col-sm-12 m-portlet">
                <div class="m-portlet__body" data-code-preview="true" data-code-html="true" data-code-js="false" role="tablist">
                    <ul class="nav nav-tabs  m-tabs-line m-tabs-line--primary" role="tablist">
                        <li class="nav-item m-tabs__item ">
                            <router-link :to="{name:'deposit.list', params: {type: 'list'}}" :class="$route.path == '/type/list' ?'active' :''" class="m-nav__link nav-link m-tabs__link">

                                <span class="m-nav__link-text">
                                    <i class="la la-remove"></i> 
                                    Deposit List
                                </span>
                                
                            </router-link>
                        </li>
                        <span class="nav-item m-tabs__item pull-right">
                            <router-link :to="{name:'deposit.create', params: {type: 'save'}}" :class="$route.path == '/type/save' ?'active' :'' " class="m-nav__link nav-link m-tabs__link">
                                <span class="m-nav__link-text m--font-danger">
                                    <i class="la la-plus m--font-danger"></i>
                                    Create New
                                </span>
                            </router-link>
                        </span>
                    </ul>
                    <div class="tab-content">
                        
                        <router-view :key="$route.name + ($route.params.status)"></router-view>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

</template>
{
<script>
	
	export default {

		data () {

			return {

				
			}
		}
	}

</script>

<style>
    .m-demo .m-demo__preview{
        border: none !important;
    }
    #app{
        width: 100%;
    }
</style>