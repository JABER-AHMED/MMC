<template>
	<div>
		<div v-for="(data, index) in datas">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group m-form__group">
					    <label for="exampleSelect1">
					        Select Member
					    </label>
					    <select v-model="data.user_id" class="form-control m-input m-input--square" id="exampleSelect1">
					        <option v-for="item in user" :value="item.id">{{ item.name }}</option>
					    </select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group m-form__group">
					    <label for="exampleInputEmail1">
					        Meal
					    </label>
					    <input type="number" class="form-control m-input m-input--square" id="exampleInputEmail1" v-model.number="data.meal" aria-describedby="emailHelp" placeholder="Enter meal">
					    <span class="m-form__help">
					        We'll never share your data with anyone else.
					    </span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group m-form__group">
					    <label for="exampleInputEmail1">
					     	Date
					    </label>
					    <input type="text" class="form-control m-input m-input--square" v-model="data.date" aria-describedby="emailHelp" placeholder="ex: 2019-07-02">
					</div>
				</div>
			</div>
		</div>
		<button @click="addNew()" type="button" class="btn btn-primary button-design">Add New</button>
		<button @click="Remove()" type="button" class="btn btn-danger button-design">Remove</button>
		<button @click="save()" type="button" class="btn btn-success button-save">Save</button>
	</div>
</template>
<script>
	export default {

		data () {
			return {
				user: [],
				data: {

				},
				user: {},
				datas: [{
					user_id: '',
					meal: '',
					date: ''
				},
				]
			}
		},
		mounted () {
			if (this.$route.params.mealId) {
				this.edit(this.$route.params.mealId);
			}
			const URL = 'http://127.0.0.1:8000/meal/user/list';
			axios.get(URL, this.data)
			.then((response) => {
				this.user = response.data;
			})
			.catch((err) => {
		 		console.log(err.response.data);
			})
		},
		methods: {
			save() {
				const URL = 'http://127.0.0.1:8000/meal/save';
				axios.post(URL, this.datas)
				.then((response) => {
					this.$toast.success({
					    title:'Notification',
    					message:'Successfully created!'
					})
					return this.$router.push({
						'name': 'meal.list',
						'params': {
							'type': this.type
						}
					});
			    })
			    .catch((err) => {
			        console.log(err.response);
			    })
			},
			addNew() {
				let newData = {
					user_id: '',
					meal: '',
					date: ''
				};
				this.datas.push(newData);
			},
			Remove() {
				this.datas.pop();
			},
			edit(id) {
				// this.pleaseWaitLoading();
				axios.get('http://127.0.0.1:8000/meal/list/' + id)
				.then((response) => {
					this.data = response.data.meal;
					this.user = response.data.meal.user;
	                // this.$loading().close();
	                console.log(this.user);
				})
				.catch((error) => {
					console.log(error.response.data);
					// this.$loading().close();
				})
			}
		}
	}
</script>
<style scoped>
	.button-save {
		margin-left: 15px;
	}
</style>
<style src="cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css"></style>