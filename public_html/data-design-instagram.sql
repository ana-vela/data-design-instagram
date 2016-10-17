
DROP TABLE IF EXISTS 'like';
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileName VARCHAR(32) NOT NULL,
	profileEmail VARCHAR(128) NOT NULL,
	profileByline VARCHAR(32),
	UNIQUE(profileEmail),
	UNIQUE(profileName),
	PRIMARY KEY(profileId)
);

CREATE TABLE post (
	postId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	postProfileId INT UNSIGNED NOT NULL,
	postContent VARCHAR (140) NOT NULL,
	posttDateTime DATETIME NOT NULL,
	INDEX (postProfileId),
	FOREIGN KEY (postProfileId) REFERENCES PROFILE (profileId),
	PRIMARY KEY (postId)
);

CREATE TABLE `like` (
	likeProfileId INT UNSIGNED NOT NULL,
	likePosttId INT UNSIGNED NOT NULL,
	likeDateTime DATETIME NOT NULL,
	INDEX (likeProfileId),
	INDEX (likePostId),
	FOREIGN KEY (likeProfileId) REFERENCES profile (profileId),
	FOREIGN KEY (likePostId) REFERENCES post (postId),
	PRIMARY KEY (likeProfileId, likePostId)
);

