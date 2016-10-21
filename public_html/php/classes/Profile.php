<?php
/**
 * Creating class for Profile
 *
 * This is the class for the Profile entity for my data design project for Instagram.
 *
 * @author Ana Vela <avela7@cnm.edu>
 * @version 1.0
 **/
class Profile {
	/**
	 * id for this Profile; this is the primary key
	 * @var int $profileId
	 **/
	private $profileId;

	/**
	 * name of the Profile
	 * @var string $profileName
	 **/
	private $profileName;

	/**
	 * description of the Profile
	 * @var string $profileByline
	 **/
	private $profileByline;

	/**
	 *
	 * email address associated with this Profile
	 * @var string $profileEmail
	 **/
	private $profileEmail;

	/**
	 *
	 * photo associated with this Profile
	 * @var string $profilePhoto
	 **/
	private $profilePhoto;


//CONSTRUCTOR GOES HERE LATER

//now, write all your accessor (getter) methods

	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	public function getProfileId() {
		return ($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new value of profile id
	 * @throws \RangeException if $newProfileId is not positive
	 * *throws \TypeError if $newProfileId is not an integer
	 *
	 **/

	public function setProfileId(int $newProfileId = null) {
		//base case: if the profile id is null, this is a new profile without a mySQL assigned id
		if($newProfileId === null) {
			$this->profileId = null;
			return;
		}

		//verify the profile id is positive
		if($newProfileId <= 0) {
			throw(new \RangeException("profile id is not positive"));
		}
		//convert and store the profile id
		$this->profileId = $newProfileId;
	}

	/**
	 * accessor method for profile name
	 *
	 * @return string value of profile name
	 **/
	public function getProfileName() {
		return ($this->profileName);
	}

	/**
	 * mutator method of profile name
	 * @param string $newProfileName new value of profile name
	 * @throws \InvalidArgumentException if $newProfileName is not a string or insecure
	 * @throws \RangeException if $newProfileName is > 32 characters
	 * @throws \TypeError if $newProfileId is not a string
	 **/
	public function setProfileName(string $newProfileName) {
		//verify the profile name is secure
		$newProfileName = trim($newProfileName);
		$newProfileName = filter_var($newProfileName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newProfileName) === true) {
			throw(new \InvalidArgumentException ("profile name is empty or insecure"));
		}

		//verify the profile name will fit in the database
		if(strlen($newProfileName) > 32) {
			throw(new \RangeException(" profile name too large"));
		}
		//store the profile name
		$this->profileName = $newProfileName;
	}

	/**
	 * accessor method for profile byline
	 *
	 * @return string value of profile byline
	 **/

	public function getProfileByline() {
		return ($this->profileByline);
	}

	/**
	 * mutator method for profile byline
	 *
	 * @param string $newProfileByline new value of profile
	 * @throws \InvalidArgumentException if $newProfileByline is not a string or insecure
	 * @throws \RangeException if $newProfileByline is > 32 characters
	 * @throws \TypeError if $newProfileByline is not a string
	 *
	 **/

	public function setProfileByline(string $newProfileByline) {
		// verify the profile byline is secure
		$newProfileByline = trim($newProfileByline);
		$newProfileByline = filter_var($newProfileByline, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newProfileByline) === true) {
			throw(new \InvalidArgumentException ("profile byline is empty or insecure"));
		}

// verify the profile byline content will fit in the database
		if(strlen($newProfileByline) > 32) {
			throw(new \RangeException("profile byline too large"));
		}

		//store the profile byline
		$this->profileByline = $newProfileByline;
	}


	/**
	 * accessor method for profile email
	 *
	 * @return string value of profile email
	 *
	 **/

	public function getProfileEmail() {
		return ($this->profileEmail);
	}

	/**
	 *
	 * mutator method for profile email
	 *
	 * @param string $newProfileEmail new value of profile email
	 * @throws \InvalidArgumentException if $newProfileByline is not a string or insecure
	 * @throws \RangeException if $newProfileEmail is > 128 characters
	 * @throws \TypeError if $newProfileEmail is not a string
	 **/
	public function setProfileEmail(string $newProfileEmail) {
		//verify the tweet content is secure
		$newProfileEmail = trim($newProfileEmail);
		$newProfileEmail = filter_var($newProfileEmail, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newProfileEmail) === true) {
			throw(new \InvalidArgumentException ("profile email is empty or insecure"));
		}
//verify the profile email will fit in the database
		if(strlen($newProfileEmail) > 128) {
			throw(new \RangeException("profile email is too large"));
		}

		// store the tweet content
		$this->profileEmail = $newProfileEmail;
	}

	/**
	 * accessor method for profile photo
	 *
	 * @return string value for profile photo
	 **/
	public function getProfilePhoto() {
		return ($this->profilePhoto);
	}

	/**
	 * mutator method for profile photo
	 *
	 * @param string $newProfilePhoto new value of profile photo
	 * @throws \InvalidArgumentException if $newProfilePhoto is not a string or insecure
	 * @throws \RangeException if $newProfilePhoto is > 128 characters
	 * @throws \TypeError if $newProfilePhoto is not a string
	 **/

	public function setProfilePhoto(string $newProfilePhoto) {
		//verify the profile photo is secure
		$newProfilePhoto = trim($newProfilePhoto);
		$newProfilePhoto = filter_var($newProfilePhoto, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newProfilePhoto) === true) {
			throw(new \InvalidArgumentException("profile photo too large"));
		}
//verify the profile photo will fit in the database
		if(strlen($newProfilePhoto) > 128) {
			throw(new \RangeException("profile photo too large"));
		}
// store profile photo
		$this->profilePhoto = $newProfilePhoto;
	}
}


