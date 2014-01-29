    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="navbar-brand">
            <?php 
              echo $this->Html->link('BookNote', array(
              'controller'=>'companies',
              'action'=>'index',
            ));
             ?>
          </div>

        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li>
              <?php 
                echo $this->Html->link('all books', array(
                'controller'=>'books',
                'action'=>'index',
                ));
              ?>
            </li>
            <li>
              <?php 
                echo $this->Html->link('add a book', array(
                'controller'=>'books',
                'action'=>'add',
                ));
              ?>
            </li>
          </ul>
          
          <!--  Begin of Login Section  -->  
          <!--    
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Account" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          -->
          <!--  End of Login Section  -->

        </div><!--/.nav-collapse -->
      </div>
    </div>