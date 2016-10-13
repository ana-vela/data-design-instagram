<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
		<title>Data Design Assignment - Instagram Profile and Post</title>
	</head>

	<body>
	<h1>Data Design Assignment</h1>
		<h2>Instagram Profile and Post</h2>

		<!-- start persona section -->
		<section>
			<h3>Persona</h3>
			<p>Name: McKenna Shutterfly</p>
			<p>Age: 26</p>
			<p>Profession: McKenna is a new freelance photographer in Albuquerque. She wants to share the photographs she has taken around the city and highlight her best photos from various gigs.</p>
			<p>Technology: McKenna invested in professional equipment for photography. She also uses her iPhone for photos when she sees a great photo opportunity and she doesn't have her professional equipment with her. It is much easier for her to post photos from her iPhone, so she chooses to upload from her iPhone more often than her regular camera.</p>
			<p>Attitudes and Behaviors: McKenna is still working full-time in retail, so she can only dedicate time to her photography when she is not working. She hopes to transition to photography full-time when she gets more consistent gigs.</p>
			<p>Frustations and Needs: She does not have a website yet, so Instagram is one of the various ways she is posting her work via social media to find more clients. She has a limited time to post photos, so she needs a quick way to get her work online.</p>
			<p>Goal: McKenna wants to post several of her most recent photos on Instagram. Since she is short on time, she will post photos from her iPhone. Since she loves Albuquerque, she wants to share many of the photos she has taken around town. This may help her create a sense of community with potential clients. Once she gets a website, she wants to add a link to her Instagram page so that potential clients can be directed to her official page.</p>
		</section>

		<!-- Start use case section -->
		<section>
			<h3>Use Case</h3>
			<p> McKenna recently created flyers and business cards to promote her photography work. She hopes that potential clients will visit her Instagram page to be able to preview her work and eventually hire her for an event or photo session.</p>
			<p>A few of McKenna's friends offered to post flyers and give out business cards for her. Her friends will also share and comment on her posts. McKenna wants to be ready with good examples of her work once more people beginning checking out her Instagram page. She will be uploading several photos with her iPhone.</p>
		</section>
		<!-- start entities section -->

		<section>
			<h3>Profile Entities</h3>
			<ul>
				<li>profileId (Primary Key)</li>
				<li>profileByline</li>
				<li>profilePhoto</li>

				</ul>
			<h3>Post Entities</h3>
			<ul>
				<li>postProfileId</li>
				<li>postId</li>
				<li>postContent</li>
				<li>postDateTime</li>
			</ul>
			</section>

		<!-- start relationship section -->

		<section>
			<h3>Relationships</h3>

				<h4>One to One </h4>
					<h5>Profile</h5>
					<p>ProfileId: primary key for the profile</p>
					<p>profileByline: description of the profile</p>
					<p>profilePhoto: identifying image for profile</p>

					<h5>Post</h5>
					<p>postId: primary key for the post</p>
					<p>postProfileId: foreign key to profile</p>
					<p>postContent: the actual post</p>
					<p>postDateTime: timestamp of post</p>

				<h4>One to Many</h4>
					<p>profileId is the foreign key to postContent</p>


				<h4> Many to Many</h4>
					<p>postContent to hashtags</p>
					<p></p>


		</section>



	</body>
	</html>