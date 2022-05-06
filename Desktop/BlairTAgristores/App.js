import React, {Component} from 'react'
import { View, Image, TouchableOpacity } from 'react-native'
import menu from './res/menu.png'
import cart from './res/cart.jpg'
import logIn from './res/logIn.jpeg'
import Icon from './res/Icon.js'
import Tablink from './res/Tablink.js'

export default class AgristoresApp extends Component {
	constructor(props){
		super(props)
		this.state = {
			loginTabVisible: true
		}

	}
	render() {
		return(
			<View style={styles.main.container}>


				{this.state.loginTabVisible &&
					<View style={styles.login.container}>
						<View style={styles.login.content}>						
							<TextInput
							style={styles.login.input}
	placeholder="ID002"
							/>
							<TextInput
	style={styles.login.input}							placeholder="******"
							/>
							<Button
style={styles.login.button}							onPress={this.handleLoginDetails}
title="LOGIN"
color="#2e856e"
							</Button>
						</View>
					</View>
				}
			</View>
		)
	
}

const styles = Stylesheet.create({
	main: {
		container: {
			width: '100vw',
			height: '100vh',
			backgroundColor: '#006a4e'
		}
	},	
	login : {
		container: {
	
			height: '50vh',
			width: '50vw',
			backgroundColor: '#2e856e'
		},
		content: {
			height: '35vh',
			width: '35vw',
			backgroundColor: '#b8d5cd'
		},
		input: {
			height: '7vh',
			width: '30vw',
			backgroundColor: '#b8d5cd',
			borderRadius: '3vw'
		}
	}
	
})

