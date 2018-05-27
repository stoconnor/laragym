import React from 'react';

import AddIcon from '@material-ui/icons/Add';
import Button from '@material-ui/core/Button';
import DeleteIcon from '@material-ui/icons/Delete';
import EditIcon from '@material-ui/icons/Create';
import ViewIcon from '@material-ui/icons/Visibility';

import styles from './ActionButtons.css';

export const EditButton = (props) => (
  <Button
    {...props}
    className={styles.actionButton}
    variant="raised"
    color="primary"
  >
    <EditIcon />
  </Button>
);

export const DeleteButton = (props) => (
  <Button
    {...props}
    className={styles.actionButton}
    variant="raised"
    color="secondary"
  >
    <DeleteIcon />
  </Button>
);

export const CreateButton = (props) => (
  <Button
    {...props}
    className={styles.actionButton}
    variant="raised"
    color="primary"
  >
    <AddIcon />
  </Button>
);

export const ViewButton = (props) => (
  <Button
    {...props}
    className={styles.actionButton}
    variant="raised"
    color="default"
  >
    <ViewIcon />
  </Button>
);
