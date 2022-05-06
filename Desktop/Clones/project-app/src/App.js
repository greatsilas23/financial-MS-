import React, {Component, useState, setState} from 'react'
import resources from './resources.js'
import styles from './styles.js';
import Form from './components/Form.js'
import AboutProjectApp from './components/AboutProjectApp.js'
import MenuBar from './components/MenuBar.js'
import ContactUs from './components/ContactUs.js'
import Navigation from './components/Navigation.js'
import Copyright from './components/Copyright.js'
class App extends React.Component {
  constructor(props){
    super(props)
    this.state = {
        showNavigation: true,
        showAbout: false,
        showContact: false,
        showMenuBar: false,
        showLoginForm: true,
        showCopyright: true
    }
  }
  handleLogin = () => {
    this.state.showLoginForm ? this.setState({showLoginForm: false}) : this.setState({showLoginForm: true, showAbout: false, showContact: false})
  }
  handleAbout = () => {
    this.state.showAbout ? this.setState({showAbout: false}) : this.setState({showAbout: true, showLoginForm: false, showContact: false})
  }
  handleContact = () => {
    this.state.showContact ? this.setState({showContact: false}) : this.setState({showContact: true, showLoginForm: false, showAbout: false})
  }
  render(){
      return (
        <div>
        {this.state.showNavigation &&
            <Navigation
                handleLogin={this.handleLogin}
                handleAbout={this.handleAbout}
                handleContact={this.handleContact}
            />
        }
        {this.state.showLoginForm &&
            <Form
                handleLogin={this.handleLogin}
            />
        }
        {this.state.showAbout &&
            <div style={styles.form}>
                <div>
                <form action="http://localhost:4000/information" method="GET">
                    <img src={resources.basic_info}/>
                </form>
                </div>
                <div>
                    <table style={{border: 'solid 2px #000'}}>
                        <tr>
                            <td>Username</td>
                            <td>User password</td>
                            <td>User role</td>
                        </tr>
                        <tr>
                            <td> example123 </td>
                            <td> 1234 </td>
                            <td> admin </td>
                        </tr>
                        <tr>
                            <td> example1234 </td>
                            <td> 1111 </td>
                            <td> admin </td>
                        </tr>
                        <tr>
                            <td> example12345 </td>
                            <td> 0000 </td>
                            <td> admin </td>
                        </tr>
                    </table>
                </div>
            </div>
        }
        {this.state.showContact &&
            <div style={styles.form}>
                <div><img src={resources.basic_share} /></div>
                <div>
                <form action="http://localhost:4000/feedback" method="GET">
                    <table style={{border: 'solid 2px #000'}} name="tbl" id="tbl">
                        <tr>
                            <td> Username</td>
                            <td> Feedback</td>
                        </tr>
                        <tr>
                            <td> example123 </td>
                            <td> Good interface </td>
                        </tr>
                        <tr>
                            <td> example123 </td>
                            <td> Effective registration  </td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
        }
        <hr />
        {this.state.showCopyright &&
            <Copyright

            />
        }
        </div>
      )
  }
}
export default App;
