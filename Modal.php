  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">All Notices</h4>
        </div>
        <div class="modal-body">
            
        <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>All Notices</h5>
          </div>
         <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
                <?php 
                $query = "SELECT * FROM notices ORDER BY id DESC";
                $execute_query = mysqli_query($connection,$query);
                
                if(!$execute_query) {
                    die("QUERY FAILED".mysqli_error($connection));
                }
                $count = 1;
                
                while($row = mysqli_fetch_array($execute_query)) {
                    echo '<li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
                <div class="article-post"> <span class="user-info"> By: '.$row['post_by'].' / Date: '.$row['date'].' / Time: '.$row['time'].' </span>
                  <p><a href="#">'.$row['message'].'</a> </p>
                </div>
              </li>';
                   
                }
                
                ?>
            </ul>
          </div>
        </div>
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
   
    </div>
    <hr>
  </div>
</div>