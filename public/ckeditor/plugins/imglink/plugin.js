CKEDITOR.plugins.add('imgLink', {
	init: function(editor) {
		// Adding dialog command
		editor.addCommand('openDialog', new CKEDITOR.dialogCommand('linkDialog'));

		// Adding button
		editor.ui.addButton('ImgLink',{
			label: 'Insert Image Link',
			icon: this.path + 'images/icon.png',
			command: 'openDialog'
		});

		// Adding Dialog
		CKEDITOR.dialog.add('linkDialog', function(editor){
			return {
				title: 'Link Image',
				minWidth: '400',
				minHeight: '300',
				contents: [
					{
						id: 'myTab',
						label: 'Inserting',
						elements: [
							{
								id: 'linkField',
								type: 'text',
								label: 'Link',
								'default': 'Insert Image Link',
							},
							{
								id: 'altField',
								type: 'text',
								label: 'Alternative Text',
							},
						]
					},
					{
						id: 'optTab',
						label: 'Option',
						elements: [
							{
								id: 'width',
								type: 'text',
								label: 'Width',
							},
							{
								id: 'height',
								type: 'text',
								label: 'Height',
							},
							{
								id: 'float',
								type: 'select',
								label: 'Float',
								items: [
									[ 'none', 'None' ],
									[ 'left', 'Left' ],
									[ 'right', 'Right' ],
								],
							}
						]
					}
				],
				onOk: function() {
					var imgLink = editor.document.createElement('img'), // create new img element
					floating = this.getValueOf('optTab', 'float'),
					width = this.getValueOf('optTab', 'width'),
					height = this.getValueOf('optTab', 'height'),
					alt = this.getValueOf('myTab', 'altField');

					// Setting src attribute
					imgLink.setAttribute('src', this.getValueOf('myTab', 'linkField'));

					if (alt) { imgLink.setAttribute('alt', alt); };

					var style = '';

					if (width) { style += 'width: ' + width + '; ' };

					if (height) {style += 'height: ' + height  + '; ' };

					if (floating) {style += 'float: ' + floating  + '; '};

					imgLink.setAttribute('style', style);

					// Inserting img element to text area
					editor.insertElement(imgLink);
				}
			}
		});
	},
});