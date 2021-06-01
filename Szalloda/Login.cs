using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics;
using System.Drawing;
using System.Linq;
using System.Security.Cryptography;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using Szalloda.Repos;

namespace Szalloda
{
    public partial class Login : Form
    {
        private Repository repo = new Repository();
        public Login()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            bool loginStatus = repo.Bejentkezes(felhasznalonevBox, jelszoBox);
            if (loginStatus)
            {
                recepcioForm rf = new recepcioForm();
                rf.Show();
                this.Hide();
            }
            else
            {
                MessageBox.Show("Hibás felhasználónév vagy jelszó!", "Hibás adatok!", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        
    }
    
}
