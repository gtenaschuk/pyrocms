<?= form_open('admin/categories/delete'); ?>

<table border="0" class="listTable">
  <thead>
	<tr>
		<th class="first"><div></div></th>
		<th><a href="#">Category</a></th>
		<th class="last width-10"><span>Actions</span></th>
	</tr>
  </thead>
  <tfoot>
  	<tr>
  		<td colspan="3">
  			<div class="inner"></div>
  		</td>
  	</tr>
  </tfoot>
    
		<tr>
			<td><input type="checkbox" name="delete[<?= $category->slug;?>]" /></td>
			<td><?=$category->title;?></td>
			<td><?=anchor('admin/categories/edit/' . $category->slug, 'Edit') . ' | ' . 
			anchor('admin/categories/delete/' . $category->slug, 'Delete', array('class'=>'confirm'));?>
			</td>
		</tr>
		<? endforeach; ?>
                      
        	<td colspan="3">There are no categories.</td>
        </tr>
    
    </tbody>
</table>

<? $this->load->view('admin/layout_fragments/table_buttons', array('buttons' => array('delete') )); ?>

 <?=form_close(); ?>