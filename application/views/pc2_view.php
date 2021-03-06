<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New Application - Living Modified Organisms: PC 2 Form</title>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/simple-sidebar.css" type="text/css" rel="stylesheet">
    
    <style>
        body {
            padding-top: 60px;
        }
        
        .btn-sample{
            position: fixed;
            margin-left: 60px;
            padding-top: 0px;
        }
        
        .approve_section{
            display: none;
        }
        
        .tblTitle{
            background-color: black;
            color: white;
            text-align: center;
        }
        
        .tblTitle2{
            background-color: #808080;
            color: white;
            text-align: center;
        }
        
        .centering{
            text-align: center;
        }
        
        
        .reddata{
            background-color: red;
        }
        
        
        .colspace{
            width: 50px;
        }
        
        .sectiontarget::before {
          content:"";
          display:block;
          height:60px; /* fixed header height*/
          margin:-60px 0 0; /* negative fixed header height */
        }
        
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Swinburne Sarawak</h3>
            </div>
            
            <ul class="list-unstyled components">
            <p>BBOS</p>
            <li>
                <a href="<?php echo base_url(); ?>index.php/lmoproject">Living Modified Organisms</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/annex2">Annex 2</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/forme">Form E</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/pc1">PC1</a>
            </li>
            <li class="active">
                <a href="<?php echo base_url(); ?>index.php/pc2">PC2</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/hirarc">OHS - HIRARC</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/swp">Safe Work Procedure</a>
            </li>
        </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content Insert Here -->
        <div id="content">
            <div class="container-fluid">
                <?php if(isset($editload)) { echo form_open('pc2/update_form'); } else { echo form_open('pc2/index'); } ?>
                <?php if(isset($disabled)){ echo "<fieldset disabled='disabled'>"; } ?>
                
                
                   <h4 class="centering"><u>Swinburne Biosafety Commitee</u></h4>
                   
                   <h3 class="centering">Application for Notifiable Low Risk Dealings</h3>
                   <h3 class="centering">(NLRDs) suitable for Physical Containment level 2 </h3>
                   <h3 class="centering">(PC2)</h3>
                   
                   <br>
                   
                   <table class="table table-bordered">
                       <thead class="tblTitle2">
                           <tr>
                               <th>DATE RECEIVED</th>
                               <th>SBC REFERENCE NUMBER</th>
                           </tr>
                       </thead>
                       <tbody class="tblTitle2">
                           <tr>
                               <td><input type="text" class="form-control" onfocus="(this.type='date')" onblur="(this.type='text')" name="date_received" placeholder="Office use only" value="<?php if(isset($load)){echo set_value('date_received', $item->date_received);}else{echo set_value('date_received');} ?>">
                               </td>
                               <td>
                                   <input type="text" class="form-control" name="SBC_reference_no" placeholder="Office use only" value="<?php if(isset($load)){echo set_value('SBC_reference_no', $item->SBC_reference_no);}else{echo set_value('SBC_reference_no');} ?>">
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                <div id="section_1" class="sectiontarget">
                   <table class="table table-bordered" id="section_1">
                       <thead>
                           <tr>
                               <th width="10" class="reddata">1</th>
                               <th>Title of Project</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td colspan="2"><input type="text" name="project_title" class="form-control" value="<?php if(isset($load)){echo set_value('project_title', $item->project_title);}else{echo set_value('project_title');} ?>"></td> 
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('project_title'); ?></span>
                </div>
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_2">2</th>
                               <th colspan="2">Researchers involved in the conduct of the project</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                          <td colspan="3">Project Supervisor (must be a Swinburne staff member)</td> 
                                       </tr>
                                       <tr>
                                           <td width="80">Title: <input type="text" class="form-control" name="project_supervisor_title" value="<?php if(isset($load)){echo set_value('project_supervisor_title', $item->project_supervisor_title);}else{echo set_value('project_supervisor_title');} ?>"></td>
                                           
                                           <td>Name: <input type="text" class="form-control" name="project_supervisor_name" value="<?php if(isset($load)){echo set_value('project_supervisor_name', $item->project_supervisor_name);}else{echo set_value('project_supervisor_name');} ?>"></td>
                                           
                                           <td>Current qualifications (please include all): <input type="text" class="form-control" name="project_supervisor_qualification" value="<?php if(isset($load)){echo set_value('project_supervisor_qualification', $item->project_supervisor_qualification);}else{echo set_value('project_supervisor_qualification');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Department: <input type="text" class="form-control" name="project_supervisor_department" value="<?php if(isset($load)){echo set_value('project_supervisor_department', $item->project_supervisor_department);}else{echo set_value('project_supervisor_department');} ?>" ></td>
                                           
                                           <td colspan="1">Campus: <input type="text" class="form-control" name="project_supervisor_campus" value="<?php if(isset($load)){echo set_value('project_supervisor_campus', $item->project_supervisor_campus);}else{echo set_value('project_supervisor_campus');} ?>" ></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="project_supervisor_postal_address" value="<?php if(isset($load)){echo set_value('project_supervisor_postal_address', $item->project_supervisor_postal_address);}else{echo set_value('project_supervisor_postal_address');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Phone: <input type="text" class="form-control" name="project_supervisor_telephone" value="<?php if(isset($load)){echo set_value('project_supervisor_telephone', $item->project_supervisor_telephone);}else{echo set_value('project_supervisor_telephone');} ?>" ></td>
                                           
                                           <td>Fax: <input type="text" class="form-control" name="project_supervisor_fax" value="<?php if(isset($load)){echo set_value('project_supervisor_fax', $item->project_supervisor_fax);}else{echo set_value('project_supervisor_fax');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="project_supervisor_email_address" value="<?php if(isset($load)){echo set_value('project_supervisor_email_address', $item->project_supervisor_email_address);}else{echo set_value('project_supervisor_email_address');} ?>"></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('project_supervisor_title'); ?></span>
                    <span class="text-danger"><?php echo form_error('project_supervisor_name'); ?></span>
                    <span class="text-danger"><?php echo form_error('project_supervisor_qualification'); ?></span>
                    <span class="text-danger"><?php echo form_error('project_supervisor_department'); ?></span>
                    <span class="text-danger"><?php echo form_error('project_supervisor_campus'); ?></span>
                    <span class="text-danger"><?php echo form_error('project_supervisor_postal_address'); ?></span>
                    <span class="text-danger"><?php echo form_error('project_supervisor_telephone'); ?></span>
                    <span class="text-danger"><?php echo form_error('project_supervisor_fax'); ?></span>
                    <span class="text-danger"><?php echo form_error('project_supervisor_email_address'); ?></span>
                   
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_3">3</th>
                               <th colspan="2">Additional people to be included in correspondence regarding this dealing<br>(e.g. Research Assistants, Biosafety Officer, Facility Managers)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td width="80">Title: <input type="text" class="form-control" name="project_add_title[0]" value="<?php if(isset($load)){echo set_value('project_add_title[0]', $i[0]);}else{echo set_value('project_add_title[0]');} ?>"></td>
                                           
                                           <td>Name: <input type="text" class="form-control" name="project_add_name[0]" value="<?php if(isset($load)){echo set_value('project_add_name[0]', $a[0]);}else{echo set_value('project_add_name[0]');} ?>"></td>
                                           
                                           <td>Current qualifications (please include all): 
                                               <input type="text" class="form-control" name="project_add_qualification[0]" value="<?php if(isset($load)){echo set_value('project_add_qualification[0]', $b[0]);}else{echo set_value('project_add_qualification[0]');} ?>">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Department: <input type="text" class="form-control" name="project_add_department[0]" value="<?php if(isset($load)){echo set_value('project_add_department[0]', $c[0]);}else{echo set_value('project_add_department[0]');} ?>"></td>
                                           
                                           <td colspan="1">Campus: <input type="text" class="form-control" name="project_add_campus[0]" value="<?php if(isset($load)){echo set_value('project_add_campus[0]', $d[0]);}else{echo set_value('project_add_campus[0]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="project_add_postal_address[0]" value="<?php if(isset($load)){echo set_value('project_add_postal_address[0]', $e[0]);}else{echo set_value('project_add_postal_address[0]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Phone: <input type="text" class="form-control" name="project_add_telephone[0]" value="<?php if(isset($load)){echo set_value('project_add_telephone[0]', $f[0]);}else{echo set_value('project_add_telephone[0]');} ?>"></td>
                                           
                                           <td>Fax: <input type="text" class="form-control" name="project_add_fax[0]" value="<?php if(isset($load)){echo set_value('project_add_fax[0]', $g[0]);}else{echo set_value('project_add_fax[0]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="project_add_email_address[0]" value="<?php if(isset($load)){echo set_value('project_add_email_address[0]', $h[0]);}else{echo set_value('project_add_email_address[0]');} ?>"></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <tr>
                                           <td width="80">Title: <input type="text" class="form-control" name="project_add_title[1]" value="<?php if(isset($load)){echo set_value('project_add_title[1]', $i[1]);}else{echo set_value('project_add_title[1]');} ?>"></td>
                                           
                                           <td>Name: <input type="text" class="form-control" name="project_add_name[1]" value="<?php if(isset($load)){echo set_value('project_add_name[1]', $a[1]);}else{echo set_value('project_add_name[1]');} ?>"></td>
                                           
                                           <td>Current qualifications (please include all): 
                                               <input type="text" class="form-control" name="project_add_qualification[1]" value="<?php if(isset($load)){echo set_value('project_add_qualification[1]', $b[1]);}else{echo set_value('project_add_qualification[1]');} ?>">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Department: <input type="text" class="form-control" name="project_add_department[1]" value="<?php if(isset($load)){echo set_value('project_add_department[1]', $c[1]);}else{echo set_value('project_add_department[1]');} ?>"></td>
                                           
                                           <td colspan="1">Campus: <input type="text" class="form-control" name="project_add_campus[1]" value="<?php if(isset($load)){echo set_value('project_add_campus[1]', $d[1]);}else{echo set_value('project_add_campus[1]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Full postal address (including internal mail details): <input type="text" class="form-control" name="project_add_postal_address[1]" value="<?php if(isset($load)){echo set_value('project_add_postal_address[1]', $e[1]);}else{echo set_value('project_add_postal_address[1]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">Phone: <input type="text" class="form-control" name="project_add_telephone[1]" value="<?php if(isset($load)){echo set_value('project_add_telephone[1]', $f[1]);}else{echo set_value('project_add_telephone[1]');} ?>"></td>
                                           
                                           <td>Fax: <input type="text" class="form-control" name="project_add_fax[1]" value="<?php if(isset($load)){echo set_value('project_add_fax[1]', $g[1]);}else{echo set_value('project_add_fax[1]');} ?>"></td>
                                       </tr>
                                       <tr>
                                           <td colspan="3">Email (MUST be staff email address): <input type="email" class="form-control" name="project_add_email_address[1]" value="<?php if(isset($load)){echo set_value('project_add_email_address[1]', $h[1]);}else{echo set_value('project_add_email_address[1]');} ?>"></td>
                                       </tr>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_4">4</th>
                               <th colspan="2">Type of Dealing (check the box that applies)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_a" <?php echo set_checkbox('dealing_type_a', '1'); ?> <?php if(isset($load)){if($item->dealing_type_a==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (a)  A dealing involving whole animals (including non-vertebrates) that:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    (i) involves genetic modification of the genome of the oocyte or zygote or early embryo by any means to produce a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; novel whole organism; and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    (ii) does not involve any of the following:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (A) a genetically modified laboratory guinea pig;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (B) a genetically modified laboratory mouse;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (C) a genetically modified laboratory rabbit;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (D) a genetically modified laboratory rat;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (E) a genetically modified Caenorhabditis elegans;



                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_aa" <?php echo set_checkbox('dealing_type_aa', '1'); ?> <?php if(isset($load)){if($item->dealing_type_aa==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (aa) A dealing involving a genetically modified laboratory guinea pig, a genetically modified mouse, a genetically   modified laboratory rabbit, a genetically modified laboratory rat, or a genetically modified Caenorhabditis elegans if:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    (i) the genetic modification confers an advantage on the animal; and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    (ii) the animal is not capable of secreting or producing an infectious agent as a result of the genetic modification;
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_b" <?php echo set_checkbox('dealing_type_b', '1'); ?> <?php if(isset($load)){if($item->dealing_type_b==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (b)  A dealing involving a genetically modified plant;
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_c" <?php echo set_checkbox('dealing_type_c', '1'); ?> <?php if(isset($load)){if($item->dealing_type_c==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (c)  A dealing involving a host/vector system not mentioned in paragraph 1.1 (c) or Part 2 of                       Schedule 2, if neither host nor vector has been implicated in, or has a history of causing,  disease in otherwise healthy:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (i) human beings; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (ii) animals; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (iii) plants; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (iv) fungi;

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_d" <?php echo set_checkbox('dealing_type_d', '1'); ?> <?php if(isset($load)){if($item->dealing_type_d==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (d)  A dealing involving a host and vector not mentioned as a host/vector system in Part 2 of Schedule 2, if:<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                   (i) the host or vector has been implicated in, or has a history of causing, disease in otherwise healthy:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        (A) human beings; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        (B) animals; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        (C) plants; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        (D) fungi; and<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                   (ii) the donor nucleic acid is characterised; and<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                   (iii) the characterisation of the donor nucleic acid shows that it is unlikely to increase  the capacity of the host or vector <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to cause harm;
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_e" <?php echo set_checkbox('dealing_type_e', '1'); ?> <?php if(isset($load)){if($item->dealing_type_e==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (e)  A dealing involving a host/vector system mentioned in Part 2 of Schedule 2, if the donor nucleic acid:<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                        (i) encodes a pathogenic determinant; or<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                        (ii) is uncharacterised nucleic acid from an organism that has been implicated in, or has a history of causing, disease in <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;otherwise healthy:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                (A) human beings; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                (B) animals; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                (C) plants; or<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                (D) fungi;

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_f" <?php echo set_checkbox('dealing_type_f', '1'); ?> <?php if(isset($load)){if($item->dealing_type_f==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (f)   A dealing involving a host/vector system mentioned in Part 2 of Schedule 2 and producing more than 25 litres of GMO culture in each vessel containing the resultant culture, if:<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                        (i) the dealing is undertaken in a facility that is certified by the Regulator as a large scale facility; and<br>&nbsp;&nbsp;&nbsp;&nbsp;
                                        (ii) the donor nucleic acid satisfies the conditions set out in subitem 4 (2) of Part 1 of Schedule 2;

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_g" <?php echo set_checkbox('dealing_type_g', '1'); ?> <?php if(isset($load)){if($item->dealing_type_g==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (g)  A dealing involving complementation of knocked-out genes, if the complementation is unlikely  to increase the <br>&nbsp;&nbsp;&nbsp;&nbsp;capacity of the GMO to cause harm compared to the capacity of the parent organism before the genes were knocked <br>&nbsp;&nbsp;&nbsp; out;

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_h" <?php echo set_checkbox('dealing_type_h', '1'); ?> <?php if(isset($load)){if($item->dealing_type_h==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (h)  A dealing involving shot-gun cloning, or the preparation of a cDNA library, in a host/vector system mentioned in <br>&nbsp;&nbsp;&nbsp;&nbsp; item 1 of Part 2 of Schedule 2, if the donor nucleic acid is derived from either:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (i) a pathogen; or <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (ii) a toxin-producing organism;
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_i" <?php echo set_checkbox('dealing_type_i', '1'); ?> <?php if(isset($load)){if($item->dealing_type_i==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (i)   A dealing involving the introduction of a replication defective viral vector unable to transduce human cells into a <br>&nbsp;&nbsp;&nbsp;&nbsp; host not mentioned in Part 2 of Schedule 2, if the donor nucleic acid cannot restore replication competence to the <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; vector;

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_j" <?php echo set_checkbox('dealing_type_j', '1'); ?> <?php if(isset($load)){if($item->dealing_type_j==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (j)  A dealing involving the introduction of a replication defective non-retroviral vector able to transduce human cells,<br>&nbsp;&nbsp;&nbsp; other than a dealing mentioned in paragraph 1.1 (c), into a host  mentioned in Part 2 of Schedule 2, if the donor <br>&nbsp;&nbsp;&nbsp;&nbsp;nucleic acid cannot restore replication  competence to the vector;

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" value="1" class="form-control" name="dealing_type_k" <?php echo set_checkbox('dealing_type_k', '1'); ?> <?php if(isset($load)){if($item->dealing_type_k==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (k)  A dealing involving the introduction of a replication defective non-retroviral vector able to  transduce human cells into <br>&nbsp;&nbsp;&nbsp;  a host not mentioned in Part 2 of Schedule 2, if:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        (i) the donor nucleic acid cannot restore replication competence to the vector; and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        (ii) the donor nucleic acid does not: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        (A) confer an oncogenic modification in humans; or <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        (B) encode a protein with immunomodulatory activity in humans;


                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" class="form-control" name="dealing_type_l" <?php echo set_checkbox('dealing_type_l', '1'); ?> <?php if(isset($load)){if($item->dealing_type_l==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (l)  A dealing involving the introduction of a replication defective retroviral vector able to transduce human cells into a host mentioned in Part 2 of Schedule 2, if:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (i) all viral genes have been removed from the retroviral vector so that it cannot replicate or assemble into a virion <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; without these functions being supplied in trans; and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (ii) viral genes needed for virion production in the packaging cell line are expressed from independent, unlinked loci <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; with minimal sequence overlap with the vector to limit or prevent recombination; and
                                            (iii) either:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (A) the retroviral vector includes a deletion in the Long Terminal Repeat  sequence of DNA that prevents <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; transcription of genomic RNA following integration into the  host cell DNA; or <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            (B) the packaging cell line and packaging plasmids express only viral genes  gagpol, rev and an envelope protein <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gene, or a subset of these;

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="form-group">
                                       <input type="checkbox" class="form-control" name="dealing_type_m" <?php echo set_checkbox('dealing_type_m', '1'); ?> <?php if(isset($load)){if($item->dealing_type_m==1){echo "checked=checked";}}else{} ?>>
                                   </div>
                               </td>
                               <td>
                                   (m) A dealing involving the introduction of a replication defective retroviral vector able to transduce human cells into a &nbsp;&nbsp; host not mentioned in Part 2 of Schedule 2, if: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        (i) the donor nucleic acid does not: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        (A) confer an oncogenic modification in humans; or <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        (B) encode a protein with immunomodulatory activity in humans; and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        (ii) all viral genes have been removed from the retroviral vector so that it cannot replicate or assemble into a virion &nbsp;&nbsp; without these functions being supplied in trans; and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (iii) viral genes needed for virion production in the packaging cell line are expressed from independent, unlinked loci with minimal sequence overlap with the vector to limit or prevent recombination; and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   (iv) either: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       (A) the retroviral vector includes a deletion in the Long Terminal Repeat sequence of DNA that prevents &nbsp;&nbsp; transcription of genomic RNA following integration into the host cell DNA; or <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       (B) the packaging cell line and packaging plasmids express only viral genes gagpol, rev and an envelope protein gene, or a subset of these.

                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                <div id="section_5" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_5">5</th>
                               <th colspan="2">Project Summary - briefly describe the project, including the aims of the proposed dealing, method of producing GMOs and their use. (This should be written in plain English).</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea class="form-control" name="project_summary" rows="6"><?php if(isset($load)){echo set_value('project_summary', $item->project_summary);}else{echo set_value('project_summary');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('project_summary'); ?></span>
                </div>
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_6">6</th>
                               <th colspan="2">Table of GMOs – list all the GMOs to be generated and or used</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>
                                               Scientific name of unmodified organism
                                           </td>
                                           <td>
                                               Vectors and method of transfer
                                           </td>
                                           <td>
                                               Gene Identity and Species of Origin
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="GMO_name" value="<?php if(isset($load)){echo set_value('GMO_name', $item->GMO_name);}else{echo set_value('GMO_name');} ?>"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="GMO_method" value="<?php if(isset($load)){echo set_value('GMO_method', $item->GMO_method);}else{echo set_value('GMO_method');} ?>"></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="GMO_origin" value="<?php if(isset($load)){echo set_value('GMO_origin', $item->GMO_origin);}else{echo set_value('GMO_origin');} ?>"></div>
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('GMO_name'); ?></span>
                   <span class="text-danger"><?php echo form_error('GMO_method'); ?></span>
                   <span class="text-danger"><?php echo form_error('GMO_origin'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_7">7</th>
                               <th colspan="2">Modified trait(s) and gene(s) responsible (Eg fungal resistance, attenuation, protein expression, disease resistance etc)) </th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>
                                               Class of modified trait
                                           </td>
                                           <td>
                                               Details
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="modified_trait_class" value="<?php if(isset($load)){echo set_value('modified_trait_class', $item->modified_trait_class);}else{echo set_value('modified_trait_class');} ?>" ></div>
                                           </td>
                                           <td>
                                               <div class="form-group"><input type="text" class="form-control" name="modified_trait_description" value="<?php if(isset($load)){echo set_value('modified_trait_description', $item->modified_trait_description);}else{echo set_value('modified_trait_description');} ?>" ></div>
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('modified_trait_class'); ?></span>
                <span class="text-danger"><?php echo form_error('modified_trait_description'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_8">8</th>
                               <th colspan="2">What are the possible hazard(s) or risk(s) to the staff performing the proposed genetic modification(s)?</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_hazard_staff" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_hazard_staff', $item->project_hazard_staff);}else{echo set_value('project_hazard_staff');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('project_hazard_staff'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_9">9</th>
                               <th colspan="2">What are the possible hazard(s) or risk(s) from an unintentional release of the GMO(s) into the environment?</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_hazard_environment" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_hazard_environment', $item->project_hazard_environment);}else{echo set_value('project_hazard_environment');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('project_hazard_environment'); ?></span>
                   
                <div id="section_10" class="sectiontarget">
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_10">10</th>
                               <th colspan="2">What are the steps you will take in the event of an unintentional release of the GMO(s)?</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_hazard_steps" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_hazard_steps', $item->project_hazard_steps);}else{echo set_value('project_hazard_steps');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('project_hazard_steps'); ?></span>
                </div>
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_11">11</th>
                               <th colspan="2">Do you propose to transport the GMO(s) outside a certified facility? (Include details about method of transportation)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_transport" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_transport', $item->project_transport);}else{echo set_value('project_transport');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('project_transport'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_12">12</th>
                               <th colspan="2">How will the GMO(s) be disposed of?</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_disposal" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_disposal', $item->project_disposal);}else{echo set_value('project_disposal');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('project_disposal'); ?></span>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_13">13</th>
                               <th colspan="2">Provide a list of the SOPs and Risk Assessments for the protocols to be used. (Attach all listed to application)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <div class="form-group">
                                       <textarea rows="15" class="form-control" name="project_SOP" placeholder="250 words max"><?php if(isset($load)){echo set_value('project_SOP', $item->project_SOP);}else{echo set_value('project_SOP');} ?></textarea>
                                   </div>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10" class="reddata" id="section_14">14</th>
                               <th>Facilities to be used</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>Buiding number: <input type="text" class="form-control" name="project_facilities_building_no" value="<?php if(isset($load)){echo set_value('project_facilities_building_no', $item->project_facilities_building_no);}else{echo set_value('project_facilities_building_no');} ?>"></td>
                                           
                                           <td>Room number: <input type="text" class="form-control" name="project_facilities_room_no" value="<?php if(isset($load)){echo set_value('project_facilities_room_no', $item->project_facilities_room_no);}else{echo set_value('project_facilities_room_no');} ?>" ></td>
                                       </tr>
                                       <tr>
                                           <td><div class="form-group">Containment Level: <input type="text" class="form-control" name="project_facilities_containment_level" value="<?php if(isset($load)){echo set_value('project_facilities_containment_level', $item->project_facilities_containment_level);}else{echo set_value('project_facilities_containment_level');} ?>" ></div></td>
                                           
                                           <td><div class="form-group">Certification number: <input type="text" class="form-control" name="project_facilities_certification_no" value="<?php if(isset($load)){echo set_value('project_facilities_certification_no', $item->project_facilities_certification_no);}else{echo set_value('project_facilities_certification_no');} ?>" ></div></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   <span class="text-danger"><?php echo form_error('project_facilities_building_no'); ?></span>
                <span class="text-danger"><?php echo form_error('project_facilities_room_no'); ?></span>
                <span class="text-danger"><?php echo form_error('project_facilities_containment_level'); ?></span>
                <span class="text-danger"><?php echo form_error('project_facilities_certification_no'); ?></span>
                   
                <div id="section_15" class="sectiontarget">
                   <table class="table table-bordered">
                       <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th width="10px" class="reddata" id="section_15">15</th>
                               <th>Biosafety Officer(s)/ Lab Manager notification</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>
                                               Has/have the Biosafety Officer(s)/Lab Manager responsible for the facilities where the dealing is to be conducted been made aware of this application? &nbsp;&nbsp;
                                               
                                               <label class="radio-inline"><input type="radio" value="1" name="officer_notified" <?php echo set_radio('officer_notified', '1'); ?> <?php if(isset($load)){if($item->officer_notified==1){echo "checked=checked";}}else{} ?>> Yes</label>
                                               
                                               <label class="radio-inline"><input type="radio" value="0" name="officer_notified" <?php echo set_radio('officer_notified', '0'); ?> <?php if(isset($load)){if($item->officer_notified==0){echo "checked=checked";}}else{} ?>> No</label>

                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                           
                           <tr>
                               <td colspan="2">
                                   <table class="table table-bordered">
                                       <tr>
                                           <td>Name of Biosafety Officer(s)</td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="officer_name" value="<?php if(isset($load)){echo set_value('officer_name', $item->officer_name);}else{echo set_value('officer_name');} ?>" ></div></td>
                                       </tr>
                                       <tr>
                                           <td>Name of Laboratory Manager</td>
                                           <td><div class="form-group"><input type="text" class="form-control" name="laboratory_manager" value="<?php if(isset($load)){echo set_value('laboratory_manager', $item->laboratory_manager);}else{echo set_value('laboratory_manager');} ?>" ></div></td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   </table>
                </div>
                   
                   <div>
                    <input type="hidden" name="appid" value="<?php if(isset($appID)){echo $appID;} ?>">
                   </div>
                
                   <div style="text-align: center">
                       <?php if(isset($editload)){ ?>
                       <button type="submit" name = 'pc2_update' value = 'Update' onclick="location.href='<?php echo site_url().'/pc2/update_form';?>'" class="btn btn-primary">Update</button>
                       <?php }else{ ?>
                       <button name="submit" type="submit" class="btn btn-primary col-md-2">Submit</button>
                       <?php } ?>
                   </div>
               <?php if(isset($disabled)){ echo "</fieldset>"; } ?>
               <?php echo form_close(); ?>
               
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>