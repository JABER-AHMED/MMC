<template>
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Meals
                        <small>
                            mess management system
                        </small>
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Search Form -->
            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">
                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span>
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: Search Form -->
            <!--begin: Datatable -->
            <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data" style="">
                    <table class="m-datatable__table" id="m-datatable--1141815346388" style="display: block; height: auto; overflow-x: auto;">
                                <thead class="m-datatable__head">
                                    <tr class="m-datatable__row" style="height: 53px;">
                                        <th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--sort"><span style="width: 50px;">#</span>
                                        </th>
                                        <th data-field="OrderID" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Member Name</span>
                                        </th>
                                        <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Meals</span>
                                        </th>
                                        <th data-field="Status" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Day</span>
                                        </th>
                                        <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="m-datatable__body" style="">
                                    <tr v-for="(item, index) in meal" data-row="0" class="m-datatable__row m-datatable__row--even" style="height: 64px;">
                                    <td data-field="RecordID" class="m-datatable__cell--center m-datatable__cell"><span style="width: 50px;">{{ ++index }}</span>
                                    </td>
                                    <td data-field="ShipName" class="m-datatable__cell"><span style="width: 110px;">{{ item.user.name }}</span>
                                    </td>
                                    <td data-field="Currency" class="m-datatable__cell"><span style="width: 100px;">{{ item.meal ? item.meal : 0 }}</span>
                                    </td>
                                    <td data-field="Currency" class="m-datatable__cell"><span style="width: 100px;">{{ item.date }}</span>
                                    </td>
                                    <td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; width: 110px;">                      <div class="dropdown ">                         <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a><div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#" @click="update(item.id)"><i class="la la-edit"></i>Edit Details</a></div>
                                    </div>
                                    </span>
                                    </td>
                                </tr>
                       </tbody>
                   </table>
            </div>
            <!--end: Datatable -->
        </div>
    </div>
</template>

<script>
	
	export default {
		data () {
			return {
				meal: [],
			}
		},
        methods: {
            update(id = null) {
                if (id) {
                    return this.$router.push({
                        'name': 'meal.edit',
                        'params': {
                            'mealId': id,
                            'type': this.type
                        }
                    });
                }
                return this.$router.push({
                    name: 'meal.create'
                })
            }
        },
		mounted() {
			const URL = 'http://127.0.0.1:8000/meal/list';
			axios.get(URL, this.data)
			.then((response) => {
				this.meal = response.data.meal;
			})
			.catch((err) => {
		 		console.log(err.response.data);
			})
		}
	}

</script>