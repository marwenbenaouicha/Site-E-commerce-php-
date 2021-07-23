<?php	
	class Client{
			private $data=array();
			public function __construct($pseudo,$nom, $prenom, $email, $telephone, $adresse, $genre, $password){
				$this->data['Pseudo']=$pseudo;
				$this->data['Nom']=$nom;
				$this->data['Prenom']=$prenom;
				$this->data['Email']=$email;
				$this->data['Telephone']=$telephone;
				$this->data['Adresse']=$adresse;
				$this->data['genre']=$genre;
				$this->data['password']=$password;

			}
			public function __get($attr){
				if (!isset($this->data["$attr"])){
					return "erreur";
				}
				else {
					return $this->data["attr"];
				}
			}
			public function __set($attr,$value){
				$this->data["attr"]=$value;
			}
			public function Ajout($conn){
				$pseudo=$this->data["Pseudo"];
				$nom=$this->data["Nom"];
				$prenom=$this->data["Prenom"];
				$email=$this->data["Email"];
				$telephone=$this->data["Telephone"];
				$adresse=$this->data["Adresse"];
				$genre=$this->data["genre"];
				$password=$this->data["password"];
				/*$req="INSERT INTO 'client'('Pseudo', 'Nom', 'Prenom' ,'Email' ,'Telephone' ,'Adresse' , 'genre' , 'password') VALUES ('$pseudo','$nom','$prenom','$email','$telephone','$adresse','$genre','$password')";
				$conn->exec($req);*/
				try{
						$stm = $conn->prepare("INSERT INTO client(Pseudo,Nom, Prenom, Email, Telephone,Adresse,genre,password) VALUES (?,?,?,?,?,?,?,?)");
						$stm->execute([$this->data['Pseudo'],$this->data["Nom"],$this->data["Prenom"], $this->data["Email"], $this->data["Telephone"],$this->data["Adresse"],$this->data["genre"],$this->data["password"]]);
						return true;
					}
					catch(PDOException $e ){}
			}
			public function Modification($conn,$pseudo,$nom,$prenom,$email,$telephone,$adresse,$genre,$password){
				$req="UPDATE client SET Pseudo='$pseudo',Nom='$nom',Prenom='$prenom',Email='$email',Telephone='$telephone',Adresse='$adresse',genre='$genre',password='$password'";
				$conn->exec($req);

			}
			public function getClientByEmail($conn,$value){
				$req="SELECT * FROM client WHERE Email='$value'";
				$query=$conn->query($req);
				$row=$query->fetch(pdo::FETCH_ASSOC);
				return $row;
			}

	}


	/*$client = array (
		"Nom"=>"mariem",
		"prenom"=>"mariem",
		"pseudo"=>"mariem",
		"email"=>"mariem.smii@enis.tn",
		"tel"=>"21533580",
		"adresse"=>"sfax",
		"id"=>"mariem",
		"mp"=>"12345678");*/
	
?>