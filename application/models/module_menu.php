<?php
class Module_menu extends CI_Model
{
	public function table()
	{
		/*
          <tr>
            <td><font color="green"><i class="fa fa-toggle-on"></i></font></td>
            <td>2</td>
            <td>About Company</td>
            <td>text</td>
            <td>2</td>
            <td>
            	<a href="#" target="_blank" title="View page" rel='tooltip'><i class="fa fa-eye"></i></a> &nbsp;&nbsp;
            	<a href="#" title="Edit page" rel='tooltip'><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
            	<a href="#" title="Attach files" rel='tooltip'><i class="fa fa-upload"></i></a>&nbsp;&nbsp;
            	<a href="#" title="Get link" rel='tooltip'><i class="fa fa-link"></i></a>&nbsp;&nbsp;
            	<a href="#" title="Add sub menu" rel='tooltip'><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
            	<a href="#" title="delete menu" rel='tooltip'><i class="fa fa-times"></i></a>&nbsp;&nbsp;
            </td>
          </tr>
          <tr>
            <td><font color="green"><i class="fa fa-toggle-on"></i></font></td>
            <td>1</td>
            <td>&nbsp;&nbsp;-&nbsp;&nbsp;History</td>
            <td>text</td>
            <td>3</td>
            <td>
            	<a href="#" target="_blank" title="View page" rel='tooltip'><i class="fa fa-eye"></i></a> &nbsp;&nbsp;
            	<a href="#" title="Edit page" rel='tooltip'><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
            	<a href="#" title="Attach files" rel='tooltip'><i class="fa fa-upload"></i></a>&nbsp;&nbsp;
            	<a href="#" title="Get link" rel='tooltip'><i class="fa fa-link"></i></a>&nbsp;&nbsp;
            	<a href="#" title="Add sub menu" rel='tooltip'><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
            	<a href="#" title="delete menu" rel='tooltip'><i class="fa fa-times"></i></a>&nbsp;&nbsp;
            </td>
          </tr>
         
        
		*/
      $out = '<table class="table">';
      $out .= '<thead><tr><th>Vis</th>
            <th>Pos</th>
            <th>Name</th>
            <th>Page type</th>
            <th>ID</th>
            <th>Actions</th> </tr>
        </thead> <tbody>';
        // LOOP START
      $out .= ' <tr>
            <td><font color="green"><i class="fa fa-toggle-on"></i></font></td>
            <td>1</td>
            <td>Home</td>
            <td>Plugin</td>
            <td>1</td>
            <td>
            	<a href="#" target="_blank" title="View page" rel="tooltip"><i class="fa fa-eye"></i></a> &nbsp;&nbsp;
            	<a href="#" title="Edit page" rel="tooltip"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
            	<a href="#" title="Attach files" rel="tooltip"><i class="fa fa-upload"></i></a>&nbsp;&nbsp;
            	<a href="#" title="Get link" rel="tooltip"><i class="fa fa-link"></i></a>&nbsp;&nbsp;
            	<a href="#" title="Add sub menu" rel="tooltip"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
            	<a href="#" title="delete menu" rel="tooltip"><i class="fa fa-times"></i></a>&nbsp;&nbsp;
            </td>
          </tr>';
         // LOOP END

      $out .= '</tbody>
      </table>';
      return $out;
	}
}
?>