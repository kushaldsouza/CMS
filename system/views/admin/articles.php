			<div id="center">
					<div id="body">
						<div id="trace">Home :: Settings</div>
						<div class="line"></div>
						<div id="maincontent">
							<? foreach($articles as $article) { ?>
								<div id="table">
								<table>
									<tr class="title">
										<td>Article ID</td>
										<td>Published Revision</td>
										<td>Latest Revision</td>
										<td>Published On</td>
									</tr>
									
								</table>
							</div>
							<? } ?>
							
							</form>
						</div> 
					</div>
					<?load_view('quicklinks', $data, true, true);?>
			</div>
				<div class="clear"></div>
