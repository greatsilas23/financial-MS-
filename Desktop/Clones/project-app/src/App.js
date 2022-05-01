import React, {Component, useState, setState} from 'react'
import logo from './logo.svg';
import './App.css';

class App extends Component {
  constructor(props){
    super(props)
    this.state = {
        showLogin: true
    }
  }
  render(){

      return (
        <div style={styles.login}>
            <h2>LOGIN</h2>
            <hr style={styles.line}/>
            <div style={styles.form}>
                <form action="http://localhost:4000/login" method="POST">
                    <input style={styles.input} type="text" placeholder="example123" name="userName" id="userName"/>
                    <input style={styles.input} type="password" placeholder="****" name="userPass" id="userPass" /><br/>
                    <input style={styles.button} type="submit" />
                    <input style={styles.button} type="reset" />
                </form>
            </div>
        </div>
      )
  }
}
const styles = {
    login: {
        width: '50vw',
        height: '40vh',
        backgroundColor: '#555',
        borderRadius: '2vw',
        display: 'flex',
        justifyContent: 'center',
        alignItems: 'center',
        flexDirection: 'column'
    },
    input: {
        width: '35vw',
        height: '6vh',
        borderRadius: '2vw',
        backgroundColor: '#fff',
        margin: '0.8vw',
        border: 'none',
        outline: 'none'
    },
    button: {
        width: '14vw',
        height: '6vh',
        borderRadius: '2vw',
        backgroundColor: '#fff',
        marginLeft: '2vw',
        marginRight: '2vw',
        border: 'none',
        outline: 'none'
    },
    line: {
        border: 'solid 2px white',
        width: '34vw'
    },
    form: {
        display: 'flex',
        justifyContent: 'center',
        alignItems: 'center',
        padding: '4.5vw'
    }
}
export default App;
