    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="navbar-brand">
            <span class="glyphicon glyphicon-book"></span>
            <?php 
              echo $this->Html->link('BookNote', array(
              'controller'=>'books',
              'action'=>'index',
            ));
             ?>
          </div>

        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li>
              <?php 
                echo $this->Html->link('All books', array(
                'controller'=>'books',
                'action'=>'index',
                ));
              ?>
            </li>
            <li>
              <?php 
                echo $this->Html->link('Add a book', array(
                'controller'=>'books',
                'action'=>'add',
                ));
              ?>
            </li>
            <li>
              <?php 
                echo $this->Html->link('Register', array(
                'controller'=>'users',
                'action'=>'add',
                ));
              ?>
            </li>
            <li>
              <?php 
                echo $this->Html->link('Login', array(
                'controller'=>'users',
                'action'=>'login',
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