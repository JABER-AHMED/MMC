<template>
    <div class="m-portlet m-portlet--mobile">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Expenses
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
                                                <th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Expense</span>
                                                </th>
                                                <th data-field="Currency" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 100px;">Date</span>
                                                </th>
                                                <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Actions</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="m-datatable__body" style="">
                                            <tr v-for="(item, index) in expense" data-row="0" class="m-datatable__row m-datatable__row--even" style="height: 64px;">
                                            <td data-field="RecordID" class="m-datatable__cell--center m-datatable__cell"><span style="width: 50px;">{{ ++index }}</span>
                                            </td>
                                            <td data-field="ShipName" class="m-datatable__cell"><span style="width: 110px;">{{ item.user.name }}</span>
                                            </td>
                                            <td data-field="Currency" class="m-datatable__cell"><span style="width: 100px;">{{ item.expense ? item.expense : 0 }}</span>
                                            </td>
                                            <td data-field="ShipAddress" class="m-datatable__cell"><span style="width: 110px;">{{ item.created_at }}</span>
                                            </td>
                                            <td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; width: 110px;">                      <div class="dropdown ">                         <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a><div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item" @click="update(item.id)"><i class="la la-edit"></i>Edit Details</a></div>
                                            </div>
                                            </span>
                                            </td>
                                        </tr>
                               </tbody>
                           </table>
                           <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                            <ul class="m-datatable__pager-nav">
                                <li>
                                    <a title="First" class="m-datatable__pager-link m-datatable__pager-link--first m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-double-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="Previous" class="m-datatable__pager-link m-datatable__pager-link--prev m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-left"></i></a>
                                </li>
                                <li style="display: none;">
                                    <a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-prev" data-page="1"><i class="la la-ellipsis-h"></i>
                                    </a>
                                </li>
                                <li style="display: none;">
                                    <input type="text" class="m-pager-input form-control" title="Page number">
                                </li>
                                <li>
                                    <a class="m-datatable__pager-link m-datatable__pager-link-number m-datatable__pager-link--active" data-page="1" title="1">1</a>
                                </li>
                                <li>
                                    <a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="2" title="2">2</a>
                                </li>
                                <li>
                                    <a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="3" title="3">3</a>
                                </li>
                                <li>
                                    <a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="4" title="4">4</a>
                                </li>
                                <li style="display: none;">
                                    <a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-next" data-page="4"><i class="la la-ellipsis-h"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="Next" class="m-datatable__pager-link m-datatable__pager-link--next" data-page="2"><i class="la la-angle-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="Last" class="m-datatable__pager-link m-datatable__pager-link--last" data-page="4"><i class="la la-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="m-datatable__pager-info">
                                <div class="btn-group bootstrap-select m-datatable__pager-size" style="width: 70px;">
                                    <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Select page size"><span class="filter-option pull-left">10</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
                                    </button>
                                    <div class="dropdown-menu open" role="combobox">
                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                            <li data-original-index="1" class="selected">
                                                <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">10</span><span class="glyphicon glyphicon-ok check-mark"></span>
                                                </a>
                                            </li>
                                            <li data-original-index="2">
                                                <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">20</span><span class="glyphicon glyphicon-ok check-mark"></span>
                                                </a>
                                            </li>
                                            <li data-original-index="3">
                                                <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">30</span><span class="glyphicon glyphicon-ok check-mark"></span>
                                                </a>
                                            </li>
                                            <li data-original-index="4">
                                                <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">50</span><span class="glyphicon glyphicon-ok check-mark"></span>
                                                </a>
                                            </li>
                                            <li data-original-index="5">
                                                <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">100</span><span class="glyphicon glyphicon-ok check-mark"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <select class="selectpicker m-datatable__pager-size" title="Select page size" data-width="70px" data-selected="10" tabindex="-98">
                                        <option class="bs-title-option" value="">Select page size
                                        </option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <span class="m-datatable__pager-detail">Displaying 1 - 10 of 37 records</span>
                            </div>
                        </div>
                    </div>
                                <!--end: Datatable -->
                            </div>
                        </div>
</template>

<script>
	
	export default {

		data () {
			return {
				expense: [],
			}
		},
        methods: {
            update(id = null) {
                if (id) {
                    return this.$router.push({
                        'name': 'expense.edit',
                        'params': {
                            'expenseId': id,
                            'type': this.type
                        }
                    });
                }
                return this.$router.push({
                    name: 'expense.create'
                })
            }
        },
		mounted() {
			const URL = 'http://127.0.0.1:8000/expense/list';
			axios.get(URL, this.data)
			.then((response) => {
				this.expense = response.data.expense;
			})
			.catch((err) => {
		 		console.log(err.response.data);
			})
		}
	}

</script>