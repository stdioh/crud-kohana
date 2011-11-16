<table class="table-a" summary="Table">
						<thead>
							<tr>
								<th scope="col" class="chb"><input class="chall" type="checkbox" /></th>
									<th scope="col">id</th>
<th scope="col">name</th>
<th scope="col">data</th>
<th scope="col">age</th>

								<th scope="col" style="width: 65px;">opcje</th>
							</tr>
						</thead>
						
						<tbody>
							<?php echo $data; ?>
						</tbody>
					</table>
					
					<div class="tab-bottom-menu">
						<h4>Nowy rekord:</h4>
						
						<ul>
							<li><a href="<?php echo URL::site('admin/member/add'); ?>" class="btn btn-gray">Dodaj</a></li> 
						</ul>		
					</div>