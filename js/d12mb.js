(function() {
	tinymce.create('tinymce.plugins.d12mb', {
		init : function (ed, url) {
			ed.addButton('d12-mb-button', {
				title:'Add a message block',
				type:'menubutton',
				image: url + '/d12-mb-mce-button.png',
				menu: [
					{
						text: 'This article in a nutshell',
						value: 'Nutshell',
						icon: 'icon d12mb-nutshell',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( enutshell ) {
									ed.selection.setContent('[d12-nutshell]' + enutshell.data.contents + '[/d12-nutshell]');
								}
							});
						}
					},
					{
						text: 'Highlight updates',
						value: 'Update',
						icon: 'icon d12mb-update',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( eupdate ) {
									ed.selection.setContent('[d12-update]' + eupdate.data.contents + '[/d12-update]');
								}
							});
						}
					},
					{
						text: 'Highlight attachments',
						value: 'Attach',
						icon: 'icon d12mb-attach',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( eattach ) {
									ed.selection.setContent('[d12-attach]' + eattach.data.contents + '[/d12-attach]');
								}
							});
						}
					},
					{
						text: 'Mark page for deletion',
						value: 'Delete',
						icon: 'icon d12mb-delete',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( edelete ) {
									ed.selection.setContent('[d12-delete]' + edelete.data.contents + '[/d12-delete]');
								}
							});
						}
					},
					{
						text: 'Highlight mentions',
						value: 'Mentions',
						icon: 'icon d12mb-mentions',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( ementions ) {
									ed.selection.setContent('[d12-mentions]' + ementions.data.contents + '[/d12-mentions]');
								}
							});
						}
					},
					{
						text: 'Warning',
						value: 'Warning',
						icon: 'icon d12mb-warning',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( ewarning ) {
									ed.selection.setContent('[d12-warning]' + ewarning.data.contents + '[/d12-warning]');
								}
							});
						}
					},
					{
						text: 'Important',
						value: 'Iportant',
						icon: 'icon d12mb-important',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( eimportant ) {
									ed.selection.setContent('[d12-important]' + eimportant.data.contents + '[/d12-important]');
								}
							});
						}
					},
					{
						text: 'Notice',
						value: 'Notice',
						icon: 'icon d12mb-notice',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( enotice ) {
									ed.selection.setContent('[d12-notice]' + enotice.data.contents + '[/d12-notice]');
								}
							});
						}
					},
					{
						text: 'Error',
						value: 'Error',
						icon: 'icon d12mb-error',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( eerror ) {
									ed.selection.setContent('[d12-error]' + eerror.data.contents + '[/d12-error]');
								}
							});
						}
					},
					{
						text: 'Caution',
						value: 'Caution',
						icon: 'icon d12mb-caution',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( ecaution ) {
									ed.selection.setContent('[d12-caution]' + ecaution.data.contents + '[/d12-caution]');
								}
							});
						}
					},
					{
						text: 'Archive',
						value: 'Archive',
						icon: 'icon d12mb-archive',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contents for this message box',
								body: [{
									type: 'textbox',
									minHeight: 150,
									minWidth: 400,
									multiline: 'true',
									name: 'contents',
									label: 'Contents:'
								}
								],
								onsubmit: function( earchive ) {
									ed.selection.setContent('[d12-archive]' + earchive.data.contents + '[/d12-archive]');
								}
							});
						}
					}
				] // end of menu
			}); // end of ed.addButton
			ed.addButton('d12-mb-button-2', {
				title:'Add a message block with a custom title',
				type:'menubutton',
				image: url + '/d12-mb-mce-button-2.png',
				menu: [
						{
						text: 'Part of a series',
						value: 'Part',
						icon: 'icon d12mb-part',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the data for this message box',
								body: [{
									type: 'textbox',
									name: 'title',
									label: 'This series of articles is about:'
								},
								{
									type: 'textbox',
									minHeight: 200,
									minWidth: 400,
									multiline: 'true',
									name: 'description',
									label: 'Description of this series:'
								}
								],
								onsubmit: function( epart ) {
									ed.selection.setContent('[d12-part series="' + epart.data.title + '"]' + epart.data.description + '[/d12-part]');
								}
							});
						}
					}, // End of "Part" 
					{
						text: 'Add a support message',
						value: 'Support',
						icon: 'icon d12mb-support',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the support information',
								body: [{
									type: 'textbox',
									name: 'title',
									label: 'Support title:'
								},
								{
									type: 'textbox',
									minHeight: 200,
									minWidth: 400,
									multiline: 'true',
									name: 'description',
									label: 'Support message:'
								}
								],
								onsubmit: function( esupport ) {
									ed.selection.setContent('[d12-support title="' + esupport.data.title + '"]' + esupport.data.description + '[/d12-support]');
								}
							});
						}
					}, // End of "Support"
					{
						text: 'Add contact information',
						value: 'Contact',
						icon: 'icon d12mb-contact',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter the contact information',
								body: [{
									type: 'textbox',
									name: 'title',
									label: 'Contact box title:'
								},
								{
									type: 'textbox',
									minHeight: 200,
									minWidth: 400,
									multiline: 'true',
									name: 'description',
									label: 'Contact information:'
								}
								],
								onsubmit: function( econtact ) {
									ed.selection.setContent('[d12-contact title="' + econtact.data.title + '"]' + econtact.data.description + '[/d12-contact]');
								}
							});
						}
					}, // End of "Contact"
					{
						text: 'Add a global message',
						value: 'Global',
						icon: 'icon d12mb-global',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter a title for this message box',
								body: [{
									type: 'textbox',
									name: 'title',
									label: 'Global title:'
								},
								{
									type: 'textbox',
									minHeight: 200,
									minWidth: 400,
									multiline: 'true',
									name: 'description',
									label: 'Global message:'
								}
								],
								onsubmit: function( eglobal ) {
									ed.selection.setContent('[d12-global title="' + eglobal.data.title + '"]' + eglobal.data.description + '[/d12-global]');
								}
							});
						}
					}, // End of "Global"
					{
						text: 'Add a green message',
						value: 'Green',
						icon: 'icon d12mb-green',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter a title for this message box',
								body: [{
									type: 'textbox',
									name: 'title',
									label: 'Green title:'
								},
								{
									type: 'textbox',
									minHeight: 200,
									minWidth: 400,
									multiline: 'true',
									name: 'description',
									label: 'Green message:'
								}
								],
								onsubmit: function( egreen ) {
									ed.selection.setContent('[d12-green title="' + egreen.data.title + '"]' + egreen.data.description + '[/d12-green]');
								}
							});
						}
					}, // End of "Green"
					{
						text: 'Add an accept message',
						value: 'Accept',
						icon: 'icon d12mb-accept',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter a title for this message box',
								body: [{
									type: 'textbox',
									name: 'title',
									label: 'Accept title:'
								},
								{
									type: 'textbox',
									minHeight: 200,
									minWidth: 400,
									multiline: 'true',
									name: 'description',
									label: 'Accept message:'
								}
								],
								onsubmit: function( eaccept ) {
									ed.selection.setContent('[d12-accept title="' + eaccept.data.title + '"]' + eaccept.data.description + '[/d12-accept]');
								}
							});
						}
					}, // End of "Green"
					{
						text: 'Add a stats message',
						value: 'Statistics',
						icon: 'icon d12mb-stats',
						onclick: function() {
							ed.windowManager.open( {
								title: 'Please enter a title for this message box',
								body: [{
									type: 'textbox',
									name: 'title',
									label: 'Statistics title:'
								},
								{
									type: 'textbox',
									minHeight: 200,
									minWidth: 400,
									multiline: 'true',
									name: 'description',
									label: 'Statistics message:'
								}
								],
								onsubmit: function( estats ) {
									ed.selection.setContent('[d12-stats title="' + estats.data.title + '"]' + estats.data.description + '[/d12-stats]');
								}
							});
						}
					} // End of "Statistics"
				] // end of menu
			}); // end of ed.addButton
		},
		createControl : function(n, cm) {
			return null;
		},
	}); // end of tinymce.create()
	tinymce.PluginManager.add( 'd12mb', tinymce.plugins.d12mb );
})(); // closes the first line
