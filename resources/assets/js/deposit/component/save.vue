<template>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group m-form__group">
			    <label for="exampleSelect1">
			        Select Member
			    </label>
			    <select v-model="data.user_id" class="form-control m-input m-input--square" id="exampleSelect1">
			        <option v-for="item in user" :value="item.id">{{ item.name }}</option>
			    </select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group m-form__group">
			    <label for="exampleInputEmail1">
			        Deposit
			    </label>
			    <input type="number" class="form-control m-input m-input--square" id="exampleInputEmail1" v-model.number="data.amount" aria-describedby="emailHelp" placeholder="Enter deposit">
			    <span class="m-form__help">
			        We'll never share your data with anyone else.
			    </span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group m-form__group">
			    <label for="exampleInputEmail1">
			        Maid Cost
			    </label>
			    <input type="number" class="form-control m-input m-input--square" id="exampleInputEmail1" v-model.number="data.maid_cost" aria-describedby="emailHelp" placeholder="Enter deposit">
			    <span class="m-form__help">
			        We'll never share your data with anyone else.
			    </span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group m-form__group">
			    <label for="exampleInputEmail1">
			        Electricity Cost
			    </label>
			    <input type="number" class="form-control m-input m-input--square" id="exampleInputEmail1" v-model.number="data.electricity_cost" aria-describedby="emailHelp" placeholder="Enter deposit">
			    <span class="m-form__help">
			        We'll never share your data with anyone else.
			    </span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group m-form__group">
			    <label for="exampleInputEmail1">
			        Internet Cost
			    </label>
			    <input type="number" class="form-control m-input m-input--square" id="exampleInputEmail1" v-model.number="data.internet_cost" aria-describedby="emailHelp" placeholder="Enter deposit">
			    <span class="m-form__help">
			        We'll never share your data with anyone else.
			    </span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group m-form__group">
			    <label for="exampleInputEmail1">
			        House Rent
			    </label>
			    <input type="number" class="form-control m-input m-input--square" id="exampleInputEmail1" v-model.number="data.house_rent" aria-describedby="emailHelp" placeholder="Enter deposit">
			    <span class="m-form__help">
			        We'll never share your data with anyone else.
			    </span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group m-form__group">
			    <label for="exampleInputEmail1">
			        Establishment Cost
			    </label>
			    <input type="number" class="form-control m-input m-input--square" id="exampleInputEmail1" v-model.number="data.establishment_cost" aria-describedby="emailHelp" placeholder="Enter deposit">
			    <span class="m-form__help">
			        We'll never share your data with anyone else.
			    </span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group m-form__group">
			</div>
		</div>
		<div class="col-md-6">
			<button @click="save()" type="button" class="btn btn-primary">
				save
			</button>
		</div>
	</div>
</template>

<script>
	
	export default {

		data () {

			return {

				user: [],
				data: {

					amount: '',
					user_id: '',
					maid_cost: '',
					electricity_cost: '',
					establishment_cost: '',
					internet_cost: '',
					house_rent: ''

				}
			}
		},
		mounted () {
			const URL = 'http://127.0.0.1:8000/deposit/user/list';
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
				if (!this.data.amount) {
					this.$toast.error({
						title: 'Notification',
						message: 'amount can not be null!!'
					})
				}
				const URL = 'http://127.0.0.1:8000/deposit/save';
				axios.post(URL, this.data)
				.then((response) => {
					this.$toast.success({
					    title:'Notification',
    					message:'Successfully created!'
					})
					return this.$router.push({
						'name': 'deposit.list',
						'params': {
							'type': this.type
						}
					});
			    })
			    .catch((err) => {
			        console.log(err.response.data);
			    })
			}
		}
	}

</script>
<style scoped>

</style>
<style src="cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css"></style>