 		<h2>Admin Functions</h2>
		<ul>
            <li><a title="Home" href="{$smarty.const.WWW_TOP}/..{$site->home_link}">Home</a></li>
            <li><a title="Admin Home" href="{$smarty.const.WWW_TOP}/">Admin Home</a></li>
            <li><a title="Edit Site" href="{$smarty.const.WWW_TOP}/site-edit.php">Edit Site</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/content-add.php?action=add">Add</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/content-list.php">Edit</a> Content Page</li>
            <li><a href="{$smarty.const.WWW_TOP}/menu-list.php">View</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/menu-edit.php?action=add">Add</a> Menu Items</li>
            <li><a href="{$smarty.const.WWW_TOP}/category-list.php?action=add">Edit</a> Categories</li>
            <li><a href="{$smarty.const.WWW_TOP}/group-list.php">View</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/group-edit.php">Add</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/group-bulk.php">BulkAdd</a> Groups</li>
            <li><a href="{$smarty.const.WWW_TOP}/regex-list.php">View</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/regex-edit.php?action=add">Add</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/regex-test.php">Test</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/regex-submit.php">Send</a> Regex</li>
			<li class="has-sub"><a href="#">Categorization</a>
				<ul>
					<li><a href="{$smarty.const.WWW_TOP}/category_regexes-edit.php?action=add">Add</a></li>
					<li class="last"><a href="{$smarty.const.WWW_TOP}/category_regexes-list.php">View</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#">Collections</a>
				<ul>
					<li><a href="{$smarty.const.WWW_TOP}/collection_regexes-edit.php?action=add">Add</a></li>
					<li><a href="{$smarty.const.WWW_TOP}/collection_regexes-test.php?action=add">Test</a></li>
					<li class="last"><a href="{$smarty.const.WWW_TOP}/collection_regexes-list.php">View</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#">Release Names</a>
				<ul>
					<li><a href="{$smarty.const.WWW_TOP}/release_naming_regexes-edit.php?action=add">Add</a></li>
					<li><a href="{$smarty.const.WWW_TOP}/release_naming_regexes-test.php?action=add">Test</a></li>
					<li class="last"><a href="{$smarty.const.WWW_TOP}/release_naming_regexes-list.php">View</a></li>
				</ul>
			</li>
            <li><a href="{$smarty.const.WWW_TOP}/binaryblacklist-list.php">View</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/binaryblacklist-edit.php?action=add">Add</a> Blacklist</li>
            <li><a href="{$smarty.const.WWW_TOP}/release-list.php">View Releases</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/preview-list.php">View Previews</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/rage-list.php">View</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/rage-edit.php?action=add">Add</a> TVRage List</li>
            <li><a href="{$smarty.const.WWW_TOP}/thetvdb-list.php">View TheTVDB List</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/movie-list.php">View</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/movie-add.php">Add</a> Movie List</li>
            <li><a href="{$smarty.const.WWW_TOP}/anidb-list.php">View AniDB List</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/music-list.php">View Music List</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/console-list.php">View Console List</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/book-list.php">View Book List</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/nzb-import.php">Import</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/nzb-export.php">Export</a> Nzb's</li>
            <li><a href="{$smarty.const.WWW_TOP}/db-optimise.php">Optimise</a> Tables</li>
            <li><a href="{$smarty.const.WWW_TOP}/comments-list.php">View Comments</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/spotnab-list.php">View</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/spotnab-edit.php?action=add">Add</a> Spotnab Sources</li>
            <li><a href="{$smarty.const.WWW_TOP}/sharing.php">Comment Sharing Settings</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/user-list.php">View</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/user-edit.php?action=add">Add</a> Users</li>
            <li><a href="{$smarty.const.WWW_TOP}/role-list.php">View</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/role-edit.php?action=add">Add</a> Roles</li>
            <li><a href="{$smarty.const.WWW_TOP}/site-stats.php">Site Stats</a> <a style="padding:0;" href="{$smarty.const.WWW_TOP}/site-debug.php">Debug</a></li>
            <li><a href="{$smarty.const.WWW_TOP}/tmux-edit.php">Tmux Settings</a></li>
			<li><a href="{$smarty.const.WWW_TOP}/view-logs.php">View Logs</a></li>
		</ul>
