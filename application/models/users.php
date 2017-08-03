<?php 
class users extends CI_Model {
	public $table = 'users';
	public $primaryKey = 'userid';

	public function __construct(){
		parent::__construct();
	}

	/**
	 *
	 * Get all collection Notification 
	 *
	 * @param   
	 * @return array
	 *
	 */

	public function getAllCollectionNotifications(){
		$this->db->select('select u.userID, u.firstname, u.lastname, u.email, ct.type, nt.remindertime')->from('users u');
		$this->db->join('users_collectiontype uct', 'u.userid = uct.userid');
		$this->db->join('collectiontype ct', 'uct.collectiontypeid = ct.collectiontypeid');
		$this->db->join('users_notificationtime unt', 'unt.userid = u.userid');
		$this->db->join('notificationtime nt', 'nt.notificationtimeid = unt.notificationtimeid');
		$this->db->order_by('u.email');

		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 *
	 * Get all collection Notification 
	 *
	 * @param   
	 * @return array
	 *
	 */

	public function getAllCollectionNotificationsDirty(){
			
		$query =  $this->db->query('select u.userID, u.firstname, u.lastname, u.email, ct.type, nt.remindertime from users as u
					join users_collectiontype as uct on (u.userid = uct.userid)
					join collectiontype as ct on (uct.collectiontypeid = ct.collectiontypeid)
					join users_notificationtime as unt on (unt.userid = u.userid)
					join notificationtime as nt on (nt.notificationtimeid = unt.notificationtimeid)');
		
		return $query->result();
	}

	/**
	 *
	 * Get all collection Notification for a user
	 *
	 * @param  character $email
	 * @return array
	 *
	 */

	public function getCollectionNotificatioByEmail($email){
			
		$query =  $this->db->query("select u.userID, u.firstname, u.lastname, u.email, ct.type, nt.remindertime from users as u
					join users_collectiontype as uct on (u.userid = uct.userid)
					join collectiontype as ct on (uct.collectiontypeid = ct.collectiontypeid)
					join users_notificationtime as unt on (unt.userid = u.userid)
					join notificationtime as nt on (nt.notificationtimeid = unt.notificationtimeid) where u.email ='" . $email . "'");
		
		return $query->result();
	}

	/**
	 *
	 * Create User and all dependencies 
	 *
	 * @param  character $fName, character $LName, character $email, int $collectionType, nt $notificationTime, 
	 * @return int $id 
	 *
	 */
	public function createAll($fName, $lName, $email, $collectionType, $notificationTime){
		try{
			$this->db->insert("users", array('firstname'=>$fName, 'lastname'=> $lName, 'email'=>$email));
			$id = $this->db->insert_id();

			$this->db->insert("users_collectiontype", array('userid'=>$id, 'collectiontypeid'=> $collectionType));
			
			
			$this->db->insert("users_notificationtime", array('userid'=>$id, 'notificationtimeid'=> $notificationTime));
			

			return $id;
		}
		catch (Exception $e){
			return $e;
		}
	}

	/**
	 *
	 * Create User and all dependencies
	 *
	 * @param  character $fName, character $LName, character $email, int $collectionType, nt $notificationTime, 
	 * @return int $id 
	 *
	 */

	public function create($fName, $lName, $email, $collectionType, $notificationTime){
		try{
			
			$id = $this->createUser($fName, $lName, $email);

			$this->createUsersCollectiontype($id, $collectionType);
			
			
			$this->createUsersNotificationtime($id, $notificationTime);
			
			return $id;
		}
		catch (Exception $e){
			return $e;
		}
	}

	/**
	 *
	 * Create user
	 *
	 * @param  character $fName, character $LName, character $email
	 * @return int $id 
	 *
	 */
	public function createUser($fName, $lName, $email){
		try{
			$this->db->insert("users", array('firstname'=>$fName, 'lastname'=> $lName, 'email'=>$email));
			$id = $this->db->insert_id();

			return $id;
		}
		catch (Exception $e){
			return $e;
		}
	}

	/**
	 *
	 * Create Collection type entry
	 *
	 * @param  int $userid, int $collectionType, 
	 * @return int $id 
	 *
	 */

	public function createUsersCollectiontype($userid, $collectionType){
		try{

			$this->db->insert("users_collectiontype", array('userid'=>$userid, 'collectiontypeid'=> $collectionType));
			$id = $this->db->insert_id();

			return $id;
		}
		catch (Exception $e){
			return $e;
		}
	}


	/**
	 *
	 * create Notificaition entry
	 *
	 * @param  int $userid, int $notificationTime, 
	 * @return int $id 
	 *
	 */
	public function createUsersNotificationtime($userid, $notificationTime){
		try{
				
			$this->db->insert("users_notificationtime", array('userid'=>$userid, 'notificationtimeid'=> $notificationTime));
			$id = $this->db->insert_id();
			
			return $id;
		}
		catch (Exception $e){
			return $e;
		}
	}

}