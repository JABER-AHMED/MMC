<template>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
				  <ul class="nav">
				     <li class="nav-item">
                        <router-link :to="{name:'my-meal.dashboard'}" :class="$route.name == 'my-meal.dashboard' ?'active' :'' " data-toggle="tab" role="tab" aria-expanded="true">
	                        <span class="m-nav__link-text">
	                            My Meals
	                        </span> 
                       </router-link>
                     </li>
				    <li class="nav-item">
				    	<router-link :to="{name:'my-meal.save', params: {type: 'save'}}" :class="$route.path == '/type/save' ?'active' :'' " data-toggle="tab" role="tab" aria-expanded="true">
	                        <span class="m-nav__link-text">
	                            Create Meal
	                        </span> 
                       </router-link>
				    </li>
				    <li class="nav-item">
				    	<router-link :to="{name:'my-meal.list', params: {type: 'list'}}" :class="$route.path == '/type/list' ?'active' :'' " data-toggle="tab" role="tab" aria-expanded="true">
	                        <span class="m-nav__link-text">
	                            Meal List
	                        </span> 
                       </router-link>
				    </li>
				  </ul>
				  	<div class="tab-content">
                        <router-view :key="$route.name + ($route.params.type)"></router-view>
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

<style scoped>
	
	.m-nav__link-text{

		padding-top: 20px;
		padding-bottom: 20px;
		padding-right: 20px;
		padding-left: 20px;
		font-size: 20px;
	}

	.nav {

		min-height: 50px;
		background: #f4f8fa;
	}

	a:hover {

		text-decoration: none;
	}

</style>