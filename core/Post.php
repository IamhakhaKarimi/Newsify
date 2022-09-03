<?php

// id, description, image, user_id, created_at, updated_at

class Post extends Model {

	protected $table = 'posts';
	protected $pk = 'id';


	public function get_posts_with_user(){
		$query = " SELECT posts.id,posts.title, posts.description, posts.image, posts.created_at, posts.user_id, users.name as user_name FROM posts JOIN users ON posts.user_id=users.id ";

		$result = $this->connection->query($query);

		return $result->fetch_all(MYSQLI_ASSOC);
	}
}