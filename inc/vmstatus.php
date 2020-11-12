<script src="js/jquery-3.2.1.min.js">
</script>
<script>
  $( document ).ready(function() {
    fetchFunction();
    setInterval("fetchFunction();",5000);
  }
                     );
  function fetchFunction(){
    $.getJSON( "inc/ps/api.php", function( data ) {
      $('#vmstatus tbody').empty();
      $.get( "inc/ps/parser.php" );
      $.each(data,function(ind,obj){
        var htmlTemplate = "<tr><td><div class='online-users'></div> " + obj.Hostname + "</td><td>" + obj.DC + "</td><td>" + obj.Cores + "</td><td>"+ obj.Uptime.Days +":"+ obj.Uptime.Hours +":"+ obj.Uptime.Minutes +":"+ obj.Uptime.Seconds +"</td><td>"+ obj.RAM +"MB</td><td>"+ obj.CPU +"%</td><td><span class='label label-info' data-toggle='modal' data-target='#removemodal'><i class='fa fa-cog'></i> Control</span></tr>"
        $('#vmstatus').append(htmlTemplate);
      }
            );
    }
             );
  }
</script> 
<table id="vmstatus" class="table table_sortable" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Hostname
      </th>
      <th>Datacenter
      </th>
      <th>Cores
      </th>
      <th>Uptime
      </th>
      <th>Ram
      </th>
      <th>CPU
      </th>
      <th>VM Actions
      </th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
