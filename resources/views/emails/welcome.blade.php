<!DOCTYPE html>
<html>
<head>
	<title>My orders</title>
</head>
<body>
	@foreach(details as detail)
	 <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>order id</th>
                  <th>product image</th>
                  <th>product name</th>
                  <th>product price</th>
                </tr>
                <tr>
                  <td>{{detail->unique_order_id}}</td>
                  <td>{{detail->image}}</td>
                  <td>
                   {{detail->price}}
                  </td>
                 
                </tr>
               
              </table>

@endforeach
	
</body>
</html>
		