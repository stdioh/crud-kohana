			<tr>
								<td><input type="checkbox" /></td>
										<td><?php echo $id; ?></td>
<td><?php echo $name; ?></td>
<td><?php echo $data; ?></td>
<td><?php echo $age; ?></td>

								<td>
									<a href="<?php echo URL::site('admin/member/edit').'/'.$id; ?>" class="table-icon edit" title="Edytuj">edytuj</a>
									<a href="#" id="delete-item" rel="delete" module="member" item="<?php echo $id; ?>" class="table-icon delete" title="Usuń">usuń</a>
								</td>
							</tr>
		