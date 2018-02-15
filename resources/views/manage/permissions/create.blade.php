@extends('layouts.manage')

@section('content')
<div class="flex-container m-l-25">
	<header class="row">
			<h1 class="title m-l-30">Create New Permissions</h1>
	</header>				
	<hr class="m-t-0">

  <div class="form">
    <div class="form-wrapper">
		<form action="{{route('permissions.store')}}" method="POST" class="thumbnail">
			{{csrf_field()}}

            <b-radio-group v-model="permissionType">
			      <div class="form-group" style="display: inline-flex;">
                <b-radio name="permission_type" value="basic">Basic Permission</b-radio>
                <b-radio class="m-l-10" name="permission_type" value="crud">CRUD Permission</b-radio>
          	</div>
          	
           	<div class="form-group" v-if="permissionType == 'basic'" value="basic">
            <label for="display_name" class="control-label">Name (Display Name)</label>
            <p class="control">
              <input type="text" class="form-control" name="display_name" id="display_name">
            </p>
          	

	         <div class="form-group">
	           <label for="name" class="control-label">Slug</label>
	            <p class="control">
	              <input type="text" class="form-control" name="name" id="name">
	            </p>
	         </div>

          	<div class="form-group">
            <label for="description" class="control-label">Description</label>
            <p class="control">
              <input type="text" class="form-control" name="description" id="description" placeholder="Describe what this permission does">
            </p>
          	</div>
            </div>

            <div class="form-group" v-if="permissionType == 'crud'" value="crud">
            <label for="resource" class="control-label">Resource</label>
            <p class="control">
              <input type="text" class="form-control" name="resource" id="resource" v-model="resource" placeholder="The name of the resource">
            </p>
          	

          	<div class="columns">
            <div class="column">
              <b-checkbox-group>
                <div class="form-group">
                  <b-checkbox v-model="crudSelected" value="create">Create</b-checkbox>
                </div>
                <div class="form-group">
                  <b-checkbox v-model="crudSelected" value="read">Read</b-checkbox>
                </div>
                <div class="form-group">
                  <b-checkbox v-model="crudSelected" value="update">Update</b-checkbox>
                </div>
                <div class="form-group">
                  <b-checkbox v-model="crudSelected" value="delete">Delete</b-checkbox>
                </div>
              </b-checkbox-group>
            </div>

            <input type="hidden" name="crud_selected" :value="crudSelected">

            <div class="column">
              <table class="table" v-if="resource.length >= 3 && crudSelected.length > 0">
                <thead>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                </thead>
                <tbody>
                  <tr v-for="item in crudSelected">
                    <td v-text="crudName(item)"></td>
                    <td v-text="crudSlug(item)"></td>
                    <td v-text="crudDescription(item)"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          </div>
				</b-radio-group>
        <div class="button">
			<button class="btn btn-md btn-success fa fa-user-plus pull-right"> Create Permission</button>      
      <a class="btn btn-warning btn-md fa fa-caret-left pull-left" href="{{route('permissions.index')}}"> Back</a>
      </div>
		</form>		
		</div>
    </div>
				
</div>
@endsection


@section('scripts')
 <script>

var permissions = new Vue({
   el: '#permissions',
   data: {
    permissionType: 'basic',
    resource: '',
    crudSelected: []
   },
    methods: {
        crudName: function(item) {
          return item.substr(0,1).toUpperCase() + item.substr(1) + " " + permissions.resource.substr(0,1).toUpperCase() + permissions.resource.substr(1);
        },
        crudSlug: function(item) {
          return item.toLowerCase() + "-" + permissions.resource.toLowerCase();
        },
        crudDescription: function(item) {
          return "Allow a User to " + item.toUpperCase() + " a " + permissions.resource.substr(0,1).toUpperCase() + permissions.resource.substr(1);
        }
      }
});
</script>
@endsection

 <!--
    var permissions = new Vue({
      el: '#permissions',
      data: {
        permissionType: 'basic',
        resource: '',
        crudSelected: ['create', 'read', 'update', 'delete']
      },
      methods: {
        crudName: function(item) {
          return item.substr(0,1).toUpperCase() + item.substr(1) + " " + permissions.resource.substr(0,1).toUpperCase() + permissions.resource.substr(1);
        },
        crudSlug: function(item) {
          return item.toLowerCase() + "-" + permissions.resource.toLowerCase();
        },
        crudDescription: function(item) {
          return "Allow a User to " + item.toUpperCase() + " a " + permissions.resource.substr(0,1).toUpperCase() + permissions.resource.substr(1);
        }
      }
    });
  -->