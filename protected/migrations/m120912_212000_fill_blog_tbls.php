<?php

class m120912_212000_fill_blog_tbls extends CDbMigration
{
	public function up()
	{
                $this->execute("INSERT INTO `blog_sort` (`id`, `name`, `active`) VALUES
(1, 'create_time DESC', 1),
(2, 'create_time ASC', 0),
(3, 'title DESC', 0),
(4, 'title ASC', 0);

INSERT INTO `tbl_lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, 'Draft', 1, 'PostStatus', 1),
(2, 'Published', 2, 'PostStatus', 2),
(3, 'Archived', 3, 'PostStatus', 3),
(4, 'Pending Approval', 1, 'CommentStatus', 1),
(5, 'Approved', 2, 'CommentStatus', 2);

INSERT INTO `tbl_post` (`title`, `content`, `tags`, `status`, `create_time`, `update_time`, `author_id`, `image_source`, `website`, `type`) VALUES
('Come the Revolution', '“I normally teach 400 students,” Ng explained, but last semester he taught 100,000 in an online course on machine learning. “To reach that many students before,” he said, “I would have had to teach my normal Stanford class for 250 years.”', 'articles', 2, 1337745600, 1338935553, 1, 'http://dev2.alephbeta.org/themes/new/img/blog/come.jpg', 'http://www.nytimes.com/2012/05/16/opinion/friedman-come-the-revolution.html?_r=3', NULL),
('Teachers love the flipped classroom', 'Teachers around the country are flipping their classroom and having great success. We recently surveyed 400 teachers who use Sophia and found that 85 percent of those who have flipped their classroom have seen improved grades...', 'articles', 2, 1337745600, 1337861732, 1, 'http://dev2.alephbeta.org/themes/new/img/blog/sophia.jpg', 'http://blog.sophia.org/flipped-classroom-the-results/', NULL),
('The Coming Meltdown in College Education & Why The Economy Won’t Get Better Any Time Soon', 'This is what I see when i think about higher education in this country today: Remember the housing meltdown ? Tough to forget isn’t it. The formula for the housing boom and bust was simple. A lot of easy money being lent to buyers who couldn’t afford the money they were borrowing...', 'articles', 2, 1337745600, 1337861539, 1, '', 'http://blogmaverick.com/2012/05/13/the-coming-meltdown-in-college-education-why-the-economy-wont-get-better-any-time-soon/', NULL),
('Move Over Harvard And MIT, Stanford Has The Real “Revolution In Education”', 'Lectures are often the least educational aspect of college; I know, I’ve taught college seniors and witnessed how little students learn during their four years in higher education...', 'articles', 2, 1337745600, 1337861546, 1, 'http://dev2.alephbeta.org/themes/new/img/blog/move.jpeg', 'http://techcrunch.com/2012/05/09/move-over-harvard-and-mit-stanford-has-the-real-revolution-in-education/', NULL),
('Jailbreaking the Degree', 'Currently, the degree is the only meaningful “unit” of education to which employers give any credence. Of this dependency, TIME magazine writes...', 'articles', 2, 1337745600, 1337861551, 1, 'http://dev2.alephbeta.org/themes/new/img/blog/Jailbreaking.jpeg', 'http://techcrunch.com/2012/05/05/jailbreaking-the-degree/', NULL),
('My Top 12', 'As a part of my doctoral studies, I recently read 12 Books that Changed the World, by Melvyn Bragg. He argues that the wisdom of others, through writings, is a powerful formative tool in our lives.\r\n\r\nHe then proceeds to detail, from his perspective, the 12 most influential (formative) writings that have served to shape the modern world. \r\nAs I considered Bragg''s ideas, I gave thought to my own list of 12 books. Actually, since some of Bragg''s 12 were not actual books, I figure my list can be a bit broader as well. So...here it goes...', 'articles', 2, 1337745600, 1337861559, 1, '', 'http://makingtalmidim.blogspot.com/2012/05/my-top-12.html', NULL),
('Phil Libin and the Refusal to Pivot: Evernote Now Valued at $1 Billion', 'Today, 30-million-user strong Evernote announced it had received $70 million in Series D funding from Meritech Capital, CBC Capital ... ', 'articles', 2, 1337745600, 1337861566, 1, 'http://dev2.alephbeta.org/themes/new/img/blog/PhilLibin.png', 'http://allthingsd.com/20120503/phil-libin-and-the-refusal-to-pivot-evernote-now-valued-at-1-billion/', NULL),
('The Online Educator’s Complete Guide to Grading Assignments, Part 2', 'Use a bank of comments that are precise, detailed, and clear. The smart online educator is the one who has a bank of comments from which he/she can draw on to give students feedback on any number of items in the course. But there are two important items here that will make these precast comments most effective: ...', 'articles', 2, 1337745600, 1337861572, 1, '', 'http://www.facultyfocus.com/articles/online-education/the-online-educators-complete-guide-to-grading-assignments-part-2/', NULL);
");
	}

	public function down()
	{
		echo "m120912_212000_fill_blog_tbls does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}