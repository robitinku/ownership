<HTML>
	<HEAD>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />
		<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
		<script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/jqx-all.js"></script>
		<script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/globalization/globalize.js"></script>
		<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.arctic.css" type="text/css" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

 

<script>
$(document).ready(function(){
	 $("#save").click(function(){
		 
		  if( $("#owner_id_edit").val()=="")
  {  
		  $.ajax({url:'<?php echo base_url().'/Owner/adddata';?>',
				type:'POST',
				//dataType : "JSON",
				data: {company:  $("#company").val(),
				first_name:  $("#first_name").val()
				
				},
				success:function(result){
				  alert(result);
			  
				}});
  }
else
     {

$.ajax({url:'<?php echo base_url().'/Owner/updatedata';?>',
				type:'POST',
				//dataType : "JSON",
				data: {company:  $("#company").val(),
				owner_id:  $("#owner_id_edit").val()
				
				},
				success:function(result){
				  $("#owner_id_edit").val(""); 
			  
				}});

	 }		 
		 
		 });
		  $("#datatable").on('click','tbody tr td:nth-child(4)',function(){
			  
	        
	        $.ajax({url:'<?php echo base_url().'/Owner/editdata';?>',
					 type:'POST',
					 data: {owner_id: $(this).closest('tr').find("input[name='owner_id']").val()},
					 success:function(result){
					result = JSON.parse(result);
					 $("#company").val(result.company);
				    // $("#branchname").val(bank.branchname);
				    // $("#account_name").val(bank.account_name); 
				    
					 $("#owner_id_edit").val(result.owner_id); 
					
				  
					}}); 
	  

        });
		 
});		 
 </script>
	
	
		
		
		<style type="text/css">
		<?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'app.css')) ?>
	</style>

	<script type="text/javascript">
		<?= file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'app.js') ?>
	</script>
		

	</HEAD>
	<BODY>
        <div id='jqxTabs'>
            <ul>
                <li style="margin-left: 30px;">Node.js</li>
                <li>JavaServer Pages</li>
                <li>Active Server Pages</li>
                <li>Python</li>
                <li>Perl</li>
            </ul>
            <div>
			
           <div class="content" style="float:left">
		   
		       <p class="title" style="font-size: 26px;font-weight: bold;">Bank Information</p>
             
              <div class="data" style="width:800px;overflow-x:scroll;"></div>
		      
            <table class="table table-bordered" id="datatable">
       <thead>
          <tr>
             <th>Id</th>
             <th>Title</th>
             <th>Description</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($ownerdata): ?>
        <?php foreach($ownerdata as $ownerdata): ?>
         <tr>
             <td><?php echo $ownerdata['company']; ?>
			 <input type="text" id="owner_id" name="owner_id" value="<?php echo $ownerdata['owner_id']; ?>">
			 </td>
             <td><?php echo $ownerdata['company']; ?></td>
             <td><?php echo $ownerdata['company']; ?></td>
             <td>
             Edit
              
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
	    </table>

            </div>
                <div class="data" style="padding:0px 0 0 800px;" >
		<div class="alert alert-success" >
	
                <button type="button" class="close" data-dismiss="alert">&times;</button>
						<span id="message">&nbsp</span>
                
            </div>
			<form id="updateStudent" name="updateStudent" action="" method="post">
        <table id="table" >
             <tr>
                <td width="30%">Company:</td>
				<td>
                 <input type="hidden"   id="owner_id_edit" size="40" value="" />				
				 <input type="text"  name="company" id="company" size="40" value="" />
             		
				<td>
			</tr>
			 <tr>
                <td width="30%">Internal owner:</td>
				<td>
                 			
				 <input type="text"  name="internal_owner" id="internal_owner" size="40" value="" />
             		
				<td>
			</tr>
			<tr>
                <td width="30%">Owner status:</td>
				<td>
                 			
				 <input type="text"  name="owner_status_id" id="owner_status_id" size="40" value="" />
             		
				<td>
			</tr>
			
			<tr>
                <td width="30%">First name:</td>
				<td>
                 			
				 <input type="text"  name="first_name" id="first_name" size="40" value="" />
             		
				<td>
			</tr>
			<tr>
                <td width="30%">Last name :</td>
				<td>
                 			
				 <input type="text"  name="last_name " id="last_name " size="40" value="" />
             		
				<td>
			</tr>
			<tr>
                <td width="30%">Phone:</td>
				<td>
                 			
				 <input type="text"  name="phone" id="phone" size="40" value="" />
             		
				<td>
			</tr>
			<tr>
                <td width="30%">Email:</td>
				<td>
                 			
				 <input type="text"  name="email" id="email" size="40" value="" />
             		
				<td>
			</tr>
			<tr>
                <td width="30%">Username:</td>
				<td>
                 			
				 <input type="text"  name="username" id="username" size="40" value="" />
             		
				<td>
			</tr>
			<tr>
                <td width="30%">Password:</td>
				<td>
                 			
				 <input type="password"  name="password" id="password" size="40" value="" />
             		
				<td>
			</tr>
			<tr>
                <td width="30%">Can download:</td>
				<td>
                 			
				 <input type="text"  name="can_download" id="can_download" size="40" value="" />
             		
				<td>
			</tr>
			<tr>
                <td width="30%">Internal owner:</td>
				<td>
                 			
				 <input type="text"  name="internal_owner" id="internal_owner" size="40" value="" />
             		
				<td>
			</tr>
			<tr>
                <td width="30%">Send suppression :</td>
				<td>
                 			
				 <input type="text"  name="send_suppression" id="send_suppression" size="40" value="" />
             		
				<td>
			</tr>
			
			 <tr>
                <td width="30%">Owner status :</td>
				<td>
                 			
				 <input type="text"  name="owner_status_id" id="owner_status_id" size="40" value="" />
             		
				<td>
			</tr>
			 
			<tr>
			<td width="30%"></td>
			<td>
			  <input type="button"  name="Save"  id="save"  value="save" class="btn btn-primary" />
			  </td>
			<tr/>
			
        </table>
        </form>
    </div>
            </div>
            <div>
                JavaServer Pages (JSP) is a Java technology that helps software developers serve
                dynamically generated web pages based on HTML, XML, or other document types. Released
                in 1999 as Sun's answer to ASP and PHP,[citation needed] JSP was designed to address
                the perception that the Java programming environment didn't provide developers with
                enough support for the Web. To deploy and run, a compatible web server with servlet
                container is required. The Java Servlet and the JavaServer Pages (JSP) specifications
                from Sun Microsystems and the JCP (Java Community Process) must both be met by the
                container.
            </div>
            <div>
                ASP.NET is a web application framework developed and marketed by Microsoft to allow
                programmers to build dynamic web sites, web applications and web services. It was
                first released in January 2002 with version 1.0 of the .NET Framework, and is the
                successor to Microsoft's Active Server Pages (ASP) technology. ASP.NET is built
                on the Common Language Runtime (CLR), allowing programmers to write ASP.NET code
                using any supported .NET language. The ASP.NET SOAP extension framework allows ASP.NET
                components to process SOAP messages.
            </div>
            <div>
                Python is a general-purpose, high-level programming language[5] whose design philosophy
                emphasizes code readability. Python claims to "[combine] remarkable power with very
                clear syntax",[7] and its standard library is large and comprehensive. Its use of
                indentation for block delimiters is unique among popular programming languages.
                Python supports multiple programming paradigms, primarily but not limited to object-oriented,
                imperative and, to a lesser extent, functional programming styles. It features a
                fully dynamic type system and automatic memory management, similar to that of Scheme,
                Ruby, Perl, and Tcl. Like other dynamic languages, Python is often used as a scripting
                language, but is also used in a wide range of non-scripting contexts.
            </div>
            <div>
                Perl is a high-level, general-purpose, interpreted, dynamic programming language.
                Perl was originally developed by Larry Wall in 1987 as a general-purpose Unix scripting
                language to make report processing easier. Since then, it has undergone many changes
                and revisions and become widely popular amongst programmers. Larry Wall continues
                to oversee development of the core language, and its upcoming version, Perl 6. Perl
                borrows features from other programming languages including C, shell scripting (sh),
                AWK, and sed.[5] The language provides powerful text processing facilities without
                the arbitrary data length limits of many contemporary Unix tools, facilitating easy
                manipulation of text files. 
            </div>       
        </div>   
	</BODY>
</HTML>