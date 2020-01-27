<?php

namespace BlogPhp\Controller;

class Admin extends Blog
{

    // Récupère les données de tous les posts puis affiche la page edit.php
    public function edit()
    {
      if (!$this->isLogged())
      header('Location: blog_index.html');

      $this->oUtil->oPosts = $this->oModel->getAll();
      $this->oUtil->getView('edit');
    }

    // Affiche la page d'edition d'article
    // Suite à l'envoie du formulaire, on récupère les données saisies pour puis on update les données du post.
    // Si on modifie l'image associée, on vérifie que l'extension existe (jpg, png ...)
    public function editPost()
    {
      if (!$this->isLogged())
      header('Location: blog_index.html');

      if (isset($_POST['edit_submit']))
      {
        if (empty($_POST['title']) || empty($_POST['body']))
        {
          $this->oUtil->sErrMsg = 'Tous les champs doivent être remplis.';
        }
        else
        {
          $this->oUtil->getModel('Admin');
          $this->oModel = new \BlogPhp\Model\Admin;

          $aData = array('post_id' => $_GET['id'], 'title' => $_POST['title'], 'body' => $_POST['body']);
          $this->oModel->update($aData);

          if (!empty($_FILES['image']['name']))
          {
            $file = $_FILES['image']['name'];
            $extensions = ['.png','.jpg','.jpeg','.gif','.PNG','.JPG','.JPEG','.GIF'];
            $extension = strrchr($file, '.');
            $id = $_GET['id'];
            if(!in_array($extension,$extensions)){
              $this->oUtil->sErrMsg = "Cette image n'est pas valable";
            }
            $this->oModel->updateImg($_FILES['image']['name'], $_GET['id'], $_FILES['image']['tmp_name']);
          }

          $this->oUtil->sSuccMsg = 'L\'article a bien été mis à jour !';

        }
      }

      /* Récupère les données du post */
      $this->oUtil->oPost = $this->oModel->getById($_GET['id']);

      $this->oUtil->getView('edit_post');
    }

    // Affiche la page add_post.php
    // Suite à l'envoie du formulaire, on récupère les données et on les insert dans la table post
    // Si il n'y a pas d'image associée, alors l'image de base sera post.png
    public function add()
    {
      if (!$this->isLogged())
      header('Location: blog_index.html');

      if (isset($_POST['add_submit']))
      {
          if (empty($_POST['title']) || empty($_POST['body']))
          {
            $this->oUtil->sErrMsg = 'Tous les champs doivent être remplis.';
          }
          else
          {
            $this->oUtil->getModel('Admin');
            $this->oModel = new \BlogPhp\Model\Admin;

            $aData = array('title' => $_POST['title'], 'body' => $_POST['body'], 'created_date' => date('Y-m-d H:i:s'));
            $this->oModel->add($aData);

            if (!empty($_FILES['image']['name']))
            {
              $file = $_FILES['image']['name'];
              $extensions = ['.png','.jpg','.jpeg','.gif','.PNG','.JPG','.JPEG','.GIF'];
              $extension = strrchr($file, '.');
              if(!in_array($extension,$extensions)){
        				  $this->oUtil->sErrMsg = "Cette image n'est pas valable";
        			}
              $this->oModel->postImg($_FILES['image']['tmp_name'], $extension);
            }

            $this->oUtil->sSuccMsg = 'L\'article a bien été ajouté !';
          }
      }

      $this->oUtil->getView('add_post');
    }

    // On affiche la page dashboard.php
    // On définit les tables qui seront affichées sur la page ainsi que leur couleur
    public function dashboard()
    {
      if (!$this->isLogged())
      header('Location: blog_index.html');

      $this->oUtil->getModel('Admin');
      $this->oModel = new \BlogPhp\Model\Admin;

      $tables = [
      	'Publications' 	      	 => 'Posts',
      	'Utilisateurs' 	         => 'Users',
      ];

      $colors = [
      	'Posts'				           => 'green',
      	'Users' 			           => 'blue',
      ];

      $this->oUtil->aColors = array();
      $this->oUtil->aInTable = array();
      $this->oUtil->aTableName = array();


      foreach ($tables as $table_name => $table)
      {
        $this->oUtil->aColors[] = $this->getColor($table,$colors);
        $this->oUtil->aInTable[] = $this->oModel->inTable($table);
        $this->oUtil->aTableName[] = $table_name;
      }

      $this->oUtil->length = count($this->oUtil->aTableName);

      $this->oUtil->getView('dashboard');
    }



    public function delete()
    {
      if (!$this->isLogged())
      header('Location: blog_index.html');

      $this->oUtil->getModel('Admin');
      $this->oModel = new \BlogPhp\Model\Admin;

      $this->oModel->delete($_GET['id']); // supprime le post

      header('Location: admin_edit.html');
    }

    private function getColor($aTable,$sColors)
    {
      if(isset($sColors[$aTable])){
  			return $sColors[$aTable];
  		}else {
  			return "orange";
  		}
    }

}
